<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo $this->session->flashdata('userPass-salah');?>
<?php echo $this->session->flashdata('passValidatorS');?>
<?php echo $this->session->flashdata('berhasil-registerS');?>
    <h1>Selamat Datang di smesco indonesia</h1>
    <hr>
    <h4>login</h4>
    <form action="<?php echo site_url('user_management/user/login')?>" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <input type="submit" value="login">
    </form>
</body>
</html>