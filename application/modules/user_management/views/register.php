<div class="row no-gutters">
<<<<<<< HEAD
    <div class="col-md-12">
    <div class="col-md-8">
    <?php echo $this->session->flashdata('passValidatorS');?>
    <?php echo $this->session->flashdata('usernameExistS');?>
    </div>
        <div class="card col-md-8">
=======
    <div class="col-md-7">
        <div class="card">
>>>>>>> aea8195a40a12ccffcf154371b1382a623431851
            <div class="card-header white">
                <h5>Tambah User</h5>
            </div>
            <div class="card-body">
<<<<<<< HEAD
                <form action="<?php echo site_url('user_management/user/register') ?>" method="post">
                    <div class="form-group col-md-5">
                    <?php if ($this->session->userdata('user_level_id') == 1) {?>
                        <label for="">User Level</label>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
=======
                    <div class="form-group">
                        <label for="">User Level</label>
                                <select id="user_level" class="form-control" name="user_level" required>
                                    <option value="">-- Pilih User Level --</option>
                                    <option value=1>Super Admin</option>
>>>>>>> aea8195a40a12ccffcf154371b1382a623431851
                                    <option value=2>Admin Marketing</option>
                                    <option value=3>Admin Bisnis</option>
                                    <option value=4>Admin Keuangan</option>
                                    <option value=5>User Marketing</option>
                                    <option value=6>User Bisnis</option>
                                    <option value=7>User Keuangan</option>
                                </select>
<<<<<<< HEAD
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
=======
                    </div>
                    <div class="form-group">
                        <label for="lebarJembatan">Lebar Jembatan</label>
                        <input type="text" class="form-control" id="lebarJembatan" placeholder="Lebar Jembatan" name="lebarJembatan">
                    </div>
                    <div class="form-group">
                        <label for="segmen">Segmen</label>
                        <input type="text" class="form-control" id="segmen" placeholder="Segmen" name="segmen">
                    </div>
                    <div class="form-group">
                        <label for="kewenanganJembatan">Kewenangan Jembatan</label>
                                <select id="kewenanganJembatan" class="form-control" name="kewenanganJembatan" required>
                                    <option value="" selected>Pilih Kewenangan Jembatan...</option>
                                    <option value="1" class="required">Pusat</option>
                                    <option value="2" class="required">Provinsi</option>
                                    <option value="3" class="required">Kota</option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label for="kondisiJembatan">Kondisi</label>
                            <select id="kondisiJembatan" class="form-control" name="kondisiJembatan"required>
                                <option value="" selected>Pilih Kondisi Jembatan...</option>
                                <option value="1" class="required">Rusak Berat</option>
                                <option value="2" class="required">Rusak Ringan</option>
                                <option value="3" class="required">Sedang</option>
                                <option value="4" class="required">Baik</option>
                            </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="konstruksiJembatan">Konstruksi</label>
                                <select id="konstruksiJembatan" class="form-control" name="konstruksiJembatan" required>
                                    <option value="" selected>Pilih Konstruksi Jembatan...</option>
                                    <option value="1" class="required">Beton</option>
                                    <option value="2" class="required">Aspal</option>
                                    <option value="3" class="required">Paping Block</option>
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="statusJembatan">Status</label>
                                <select id="statusJembatan" class="form-control" name="statusJembatan"required>
                                    <option value="" selected>Pilih Status Jembatan...</option>
                                    <option value="1" class="required">Jembatan Baru</option>
                                    <option value="2" class="required">Perbaikan</option>
                                    <option value="3" class="required">Penambahan/perpanjangan</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tahunPerencanaan">Tahun Perencanaan</label>
                            <input type="text" class="form-control" id="tahunPerencanaan" placeholder="Tahun Perencanaan" name="tahunPerencanaan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keteranganJembatan">Keterangan</label>
                            <textarea class="form-control" rows="5" id="keteranganJembatan" placeholder="Keterangan" name="keteranganJembatan"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kelurahan">Kelurahan</label>
                                <select id="kelurahan" class="form-control" name="kelurahan" required>
                                    <option value = "" selected>Pilih Kelurahan...</option>
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" disabled>
                            <input type="text" class="form-control" id="kecamatanHidden" name="kecamatan" hidden>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>
    </div>
    <div class="col-md-5 sticky">
        <div class="card">
            <div class="card-header white"><span id="fs" class="icon-fullscreen float-right" style="font-size:22px;cursor:pointer;"></span>
                <h5>Tentukan titik lokasi jembatan</h5>
            </div>
            <div class="card-body">
                <div class="form-row">
                <label for="latlong">Cari berdasarkan koordinat</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Latitude, Longitude" id="latlong">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" onclick="zoom2latLng();">
                                <i class="icon-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <div id="mapidinputjalan"></div>
                    <div class="form-group">
                        <label for="koordinat">Koordinat</label>
                        <textarea class="form-control" rows="5" id="koordinat" placeholder="Koordinat" name="koordinat"></textarea>
                    </div>
>>>>>>> aea8195a40a12ccffcf154371b1382a623431851
            </div>
        </div>
    </div>
</div>