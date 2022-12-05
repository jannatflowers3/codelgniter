<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
class UserCrud extends BaseController
{
    public function index()
    {
       $usrModel = new UserModel();
       $data['myusers']= $usrModel->orderBy('id','DESC')->findAll();
       return view('users_display',$data);

    //    $data['myusers'] =$usrModel->find();
    }

    public function create(){
        return view('user_create');
    }
    public function store(){

        // helper(['form', 'url']);       
        $isValid = $this->validate([
            'user_name' => 'required',
            'user_email' => 'required',
        ]);
        if($this->validate($rules)){
            $userObj = new UserModel();
            $date['name'] = $this->request->getVar('u_name');
            $data['email'] =$this->request->getVar('u_email');
            $userObj->insert($data);
            $this->response->redirect('/users');

        }
        else{
            $data['validation']= $this->validate;
            return view('user_create',$data);
        }



       $userObjEntry = new UserModel();
       $data['name']=$this->request->getVar('user_name');
     $data['email']= $this->request->getVar("user_email");

     $userObjEntry->insert($data);
     $this->response->redirect('/users');
}
public function delete($id){
    $userObjDelete = new UserModel();
    $userObjDelete->Where ('id',$id)->delete($id);
    $this->response->redirect('/users');
    // echo $id;
}

public function edit($id){

    $userObjEdit = new UserModel();
    // $userObjEdit->Where('id',$email)->find($id);
    $data['user']= $userObjEdit->find($id);
    return view("user_edit",$data);
}


public function update()
{
    $userObjUpdate = new UserModel();
    $id = $this->request->getVar('u_id');
  $data['name'] = $this->request->getVar('u_name');
   $data['email'] =$this->request->getVar('u_email');
   $userObjUpdate->update($id,$data);
//    echo $id;
   
//    print_r($data);
  return $this->response->redirect(site_url('/users'));
}
}