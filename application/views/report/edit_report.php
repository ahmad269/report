<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                      <a href="index3.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                      <a href="#" class="nav-link">Contact</a>
                  </li> -->
               

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?= base_url('material/myreport/adminlte/') ?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('material/myreport/adminlte/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $navmenu ?></span>

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('material/myreport/profil/' . $akun['foto_profil']) ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url('profile') ?>" class="d-block"><?= $akun['nama'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <?php
                        if ($akun['jabatan'] == 1) {
                            echo "
                                    <li class='nav-header'>GENERAL</li>
                          <li class='nav-item'>
                              <a href='dashboards' class='nav-link '>
                                  <i class='nav-icon fas fa-tachometer-alt'></i>
                                  <p>
                                      Dashboard
                                      <!-- <span class='right badge badge-danger'>New</span> -->
                                  </p>
                              </a>
                          </li>
                                ";
                        } else if ($akun['jabatan'] == 2) {
                            echo "
                                    <li class='nav-header'>GENERAL</li>
                          <li class='nav-item'>
                              <a href='dashboard' class='nav-link  '>
                                  <i class='nav-icon fas fa-tachometer-alt'></i>
                                  <p>
                                      Dashboard
                                      <!-- <span class='right badge badge-danger'>New</span> -->
                                  </p>
                              </a>
                          </li>
                                ";
                        }
                        ?>

                         <li class=" nav-header">MASTER DATA</li>                          
                         <li class="nav-item">
                              <a href="<?= base_url('admin/data_report') ?>" class="nav-link">
                                  <i class="nav-icon fas fa-database"></i>
                                  <p>
                                      Data Report
                                  </p>
                              </a>
                          </li>

                        <li class="nav-item">
                            <a href="<?= base_url('data_ur') ?>" class="nav-link">
                                <i class="nav-icon fas fa-robot"></i>
                                <p>
                                    Data UR
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('data_vim') ?>" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Data VIM
                                </p>
                            </a>
                        </li>



                        <li class="nav-header">WEB APP</li>
                        <li class="nav-item">
                            <a href="<?= base_url('profile') ?>" class="nav-link">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>Profil Saya</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4><code class="text-info"><?= $sub ?>
                                    <a href="https://time.is/Bekasi" id="time_is_link" rel="nofollow" style="font-size:20px"></a>
                                    <span class="btn btn-sm btn-outline-info btn-flat" id="Bekasi_z41c" style="font-size:15px"></span>
                                    <script src="//widget.time.is/t.js"></script>
                                    <script>
                                        time_is_widget.init({
                                            Bekasi_z41c: {}
                                        });
                                    </script>
                                </code>

                            </h4>



                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
                                <li class="breadcrumb-item active"><?= $navigasi ?></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>



            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <form action="<?= base_url('admin/data_report/update_report') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-5 pr-5">
                                <?php foreach ($report as $rpt) : ?>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="date" class="form-control" id="data_report" placeholder="" name="date" value="<?= $rpt->date ?>">
                                        <input type="hidden" class="form-control" id="data_report" placeholder="" name="id" value="<?= $rpt->id_report ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Line</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="line">
                                            <option selected="selected"><?= $rpt->line ?></option>
                                            <option value="MA 02">MA 02</option>
                                            <option value="MA 04">MA 04</option>
                                            <option value="MA 05">MA 05</option>
                                            <option value="MA 07">MA 07</option>
                                            <option value="MA 10">MA 10</option>
                                            <option value="MA 04">MA 15</option>
                                            <option value="MA 15">MA 16</option>
                                            <option value="MA 17">MA 17</option>
                                            <option value="MA 20">MA 20</option>
                                            <option value="MA 22">MA 22</option>
                                            <option value="MA 23">MA 23</option>
                                            <option value="MA 24">MA 24</option>
                                            <option value="MA 25">MA 25</option>
                                            <option value="MA TUNER">MA TUNER</option>
                                        </select>
                                    </div>
                                    <label for="exampleInputPassword1">Time Start</label>
                                    <div class="input-group date form-group" id="timepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="tstart" value="<?= $rpt->tstart ?>" />
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <label for="exampleInputPassword1">Time Finish</label>
                                    <div class="input-group date form-group" id="timepicker2" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker2" name="tfinish" value="<?= $rpt->tfinish ?>" />
                                        <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="type">
                                            <option selected="selected"><?= $rpt->type ?></option>
                                            <option value="Trouble">Trouble</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Improve">Improve</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Equipment</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="eqp">
                                            <option selected="selected"><?= $rpt->eqp ?></option>
                                            <option value="UR">UR</option>
                                            <option value="VIM">VIM</option>
                                            <option value="MELVA">MELVA</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Item</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="item" value="<?= $rpt->item ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Model</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="model" value="<?= $rpt->model ?>">
                                    </div>


                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="file" value="<?= $rpt->file ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Problem</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height: 85px" name="problem" value="<?= $rpt->problem ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cause</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height: 100px" name="cause" value="<?= $rpt->cause ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Action</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height: 100px" name="action" value="<?= $rpt->action ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Note</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="note" value="<?= $rpt->note ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pic</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="pic" value="<?= $rpt->pic ?>">
                                </div>
                                <div class="text-right">
                                    <a href="<?= base_url('data_report') ?>" class="btn btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-primary  pull-right">Simpan</button>
						
									
                                </div>
                            </div>
                        <?php endforeach; ?>

                        </div>


                    </form>

                </div>


            </section>

        </div>
        <!-- /.content-wrapper -->