<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Entry Form </<h1>
        <?php  $validation = \confifg\Services::validation(); ?>
<form action="<?php echo site_url('users/submit') ?> " method="post">
    
    <input type="text" name ="user_name" placeholder="enter you name"/><br>
    <?php if($validation->getError('u_name')) ?>
    <input type="email" name ="user_email" placeholder="enter you email" /><br>
    <input type="submit" name ="submit" value="submit" /><br>
</form>


    <br><br>

    <a href="/users">All Users</a>
    <a href="/users/add">New Users</a>
</body>
</html>