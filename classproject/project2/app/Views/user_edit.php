<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data </h1>
    <form method="post" action="<?php  echo site_url('/users/update')?>">

Name :<input type="text" name ="u_name" value="<?php echo $user['name'];?>"><br>
Email :<input type="email" name="u_email" value="<?php echo $user['email'];?>"><br>
<input type="submit" name="update" value="Update"><br>
<input type="hidden" name="u_id" value="<?php echo $user['id']?>">
</form>
</body>
</html>