<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?php echo base_url('assets/img/basic/logo.png') ?>" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo base_url('assets/img/dummy/u2.png') ?>" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo $this->session->userdata('nama')?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
<<<<<<< HEAD
                        <a href="index.html" class="list-group-item list-group-item-action ">
=======
                   <?php $id=$this->session->userdata('ids');
                  ?>
                        <a href="<?php echo site_url('user_management/user/profile/')?><?php echo "$id";?>" class="list-group-item list-group-item-action ">
>>>>>>> aea8195a40a12ccffcf154371b1382a623431851
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="icon icon-folder5"></i>Panel Dashboard 1</a>
                    </li>
                    <li><a href="panel-page-dashboard1-rtl.html"><i class="icon icon-folder5"></i>Panel Dashboard 1 - RTL</a>
                    </li>
                    <li><a href="panel-page-dashboard2.html"><i class="icon icon-folder5"></i>Panel Dashboard 2</a>
                    </li>
                    <li><a href="panel-page-dashboard3.html"><i class="icon icon-folder5"></i>Panel Dashboard 3</a>
                    </li>
                    <li><a href="panel-page-dashboard4.html"><i class="icon icon-folder5"></i>Panel Dashboard 4</a>
                    </li>
                    <li><a href="panel-page-dashboard5.html"><i class="icon icon-folder5"></i>Panel Dashboard 5</a>
                    </li>
                    <li><a href="panel-page-dashboard6.html"><i class="icon icon-folder5"></i>Panel Dashboard 6</a>
                    </li>
                    <li><a href="panel-page-dashboard7.html"><i class="icon icon-folder5"></i>Panel Dashboard 7</a></li>
                    <li><a href="panel-page-dashboard9.html"><i class="icon icon-folder5"></i>Panel Dashboard 9</a></li>
                    <li><a href="panel-page-dashboard10.html"><i class="icon icon-folder5"></i>Panel Dashboard 10</a></li>
                    <li><a href="panel-page-dashboard11.html"><i class="icon icon-folder5"></i>Panel Dashboard 11</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Products</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-products.html"><i class="icon icon-circle-o"></i>All Products</a>
                    </li>
                    <li><a href="panel-page-products-create.html"><i class="icon icon-add"></i>Add
                        New </a>
                    </li>
                </ul>
            </li>
<<<<<<< HEAD
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Kelola User<i
=======
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-grey-text s-18"></i>Kelola User<i
>>>>>>> aea8195a40a12ccffcf154371b1382a623431851
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('user_management/user/kelolauser_load') ?>"><i class="icon icon-circle-o"></i>Data User</a>
                    </li>
                    <li><a href="<?php echo site_url('user_management/user/register_load') ?>"><i class="icon icon-add"></i>Tambah User</a>
                    </li>
                </ul>
            </li>
            <?php if ($this->session->userdata('user_level_id') == 3 || 1) { ?>
            <li class="treeview"><a href="#"><i class="icon icon-calendar-o light-grey-text s-18"></i>Event<i
                 class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('user_management/user/event') ?>"><i class="icon icon-circle-o"></i>Data Event</a>
                    </li>
                    <li><a href="<?php echo site_url('user_management/user/tambah_event') ?>"><i class="icon icon-add"></i>Tambah Event</a>
                    </li>
                </ul>
            </li>

            <li class="treeview"><a href="#"><i class="icon icon-money-2 light-grey-text s-18"></i>Realisasi<i
                 class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('user_management/user/event') ?>"><i class="icon icon-circle-o"></i>Laporan Realisasi </a>
                    </li>
                    <li><a href="<?php echo site_url('user_management/user/event') ?>"><i class="icon icon-add"></i>Laporan Anggaran</a>
                    </li>
                </ul>
            </li>

            <?php } ?>
            <li class="treeview no-b"><a href="#">
                <i class="icon icon-package light-green-text s-18"></i>
                <span>Inbox</span>
                <span class="badge r-3 badge-success pull-right">20</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="panel-page-inbox.html"><i class="icon icon-circle-o"></i>All Messages</a>
                    </li>
                    <li><a href="panel7-inbox.html"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                    </li>
                    <li><a href="panel8-inbox.html"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                    </li>
                    <li><a href="panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                    </li>
                </ul>
            </li>
    </section>
</aside>