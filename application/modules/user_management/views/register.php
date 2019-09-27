<div class="row no-gutters">
    <div class="col-md-12">
    <div class="col-md-8">
    <?php echo $this->session->flashdata('passValidatorS');?>
    <?php echo $this->session->flashdata('usernameExistS');?>
    </div>
        <div class="card col-md-8">
            <div class="card-header white">
                <h5>Tambah User</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('user_management/user/register') ?>" method="post">
                    <div class="form-group col-md-5">
                    <?php if ($this->session->userdata('user_level_id') == 1) {?>
                        <label for="">User Level</label>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
                                    <option value=2>Admin Marketing</option>
                                    <option value=3>Admin Bisnis</option>
                                    <option value=4>Admin Keuangan</option>
                                    <option value=5>User Marketing</option>
                                    <option value=6>User Bisnis</option>
                                    <option value=7>User Keuangan</option>
                                </select>
                    <?php } elseif ($this->session->userdata('user_level_id') == 2) {?>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
                                    <option value=5>User Marketing</option>
                                </select>
                    <?php } elseif ($this->session->userdata('user_level_id') == 3) {?>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
                                    <option value=6>User Bisnis</option>
                                </select>
                    <?php } elseif ($this->session->userdata('user_level_id') == 4) {?>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
                                    <option value=7>User Keuangan</option>
                                </select>
                    <?php } ?>
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon" name="no_telp">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat"> </textarea>
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="konf_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konf_password" placeholder="Konfirmasi Password" name="konf_password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>