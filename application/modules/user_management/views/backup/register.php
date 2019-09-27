<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang di smesco indonesia</h1>
    <hr>
    <h4>Registrasi</h4>
    <?php echo $this->session->userdata('user_level_id'); ?>
    <form action="<?php echo site_url('user_management/user/register') ?>" method="post">
        <table>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>
                <!-- <?php if ($this->session->userdata('user_level_id') == 1) {?>
                    <select name="user_level">
                    <?php var_dump($superadmin) ?>
                        <?php foreach ($superadmin as $sa) {?>
                        <option value=""><?php $sa['user_level'] ?></option>
                        <?php }; ?>
                    </select>
                <?php }else { ?>
                    <select name="user_level">
                        <option value="">-- Pilih User Level --</option>
                    </select>
                <?php }; ?>  -->
                    <select name="user_level">
                        <option value="">-- Pilih User Level --</option>
                        <option value=1>Super Admin</option>
                        <option value=2>Admin Marketing</option>
                        <option value=3>Admin Bisnis</option>
                        <option value=4>Admin Keuangan</option>
                        <option value=5>User Marketing</option>
                        <option value=6>User Bisnis</option>
                        <option value=7>User Keuangan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" class="form-control form-control-lg r-0"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
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
            <tr>
                <td>Konfirmas Password</td>
                <td>:</td>
                <td><input type="password" name="konf_password"></td>
            </tr>
        </table>
        <input type="submit" value="Register">
    </form>
</body>
</html>