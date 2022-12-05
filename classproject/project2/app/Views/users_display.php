<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users Table</h1>
    <table border='1'>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>Action</td>
         
            <tr>
                <?php  foreach($myusers as $users):?>
            </tr>
        
        <tr>
            <td><?php   echo $users['id']?></td>
            <td><?php   echo $users['name']?></td>
            <td><?php   echo $users['email']?></td>
            <td>  | 
            <a href ="<?php  echo base_url("users/edit/".$users['id']) ?>"> Edit</a>
            <a href ="<?php  echo base_url("users/delete/".$users['id']) ?>"> Delete</a>
        </td>
           
                
        </tr>
                <?php endforeach;?>
           
    </table>
    <br><br>
    <a href="/users">All Users</a>
    <a href="/users/add">New Users</a>

</body>
</html>