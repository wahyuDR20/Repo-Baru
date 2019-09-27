<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini adalah halaman super admin</h1>
    <a href="<?php echo site_url('user_management/user/logout'); ?>">Logout</a>
    <a href="<?php echo site_url("user_management/user/register_load")?>">Register</a>
</body>
</html>