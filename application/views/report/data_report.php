<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                 <li class="nav-item d-none d-sm-inline-block">
                      <a href="" class="nav-link">

                          <?php

                            date_default_timezone_set("Asia/Jakarta");

                            $b = time();
                            $hour = date("G", $b);

                            $nama = $user['nama'];

                            if ($hour >= 0 && $hour <= 11) {
                                echo "
                                <script language='JavaScript'>
                                var text='Selamat Pagi $nama! Tetap semangat ya...! &#128522';
                                var delay=5;
                                var currentChar=1;
                                var destination='[none]';
                                function type()
                                {
                                //if (document.all)
                                {
                                var dest=document.getElementById(destination);
                                if (dest)// && dest.innerHTML)
                                {
                                dest.innerHTML=text.substr(0, currentChar)+'<blink>_</blink>';
                                currentChar++;
                                if (currentChar>text.length)
                                {
                                currentChar=1;
                                setTimeout('type()', 5000);
                                }
                                else
                                {
                                setTimeout('type()', delay);
                                }
                                }
                                }
                                }
                                function startTyping(textParam, delayParam, destinationParam)
                                {
                                text=textParam;
                                delay=delayParam;
                                currentChar=1;
                                destination=destinationParam;
                                type();
                                }
                                </script> <b><div 0px='' 12px='' arial='' color:='' ff0000='' font:='' id='textDestination' margin:='' style='background-color: none;'></div></b> <script language='JavaScript'>
                                javascript:startTyping(text, 50, 'textDestination');
                                </script>

                                ";
                        } elseif ($hour >= 12 && $hour <= 14) {
                            echo "
                                <script language='JavaScript'>
                                var text='Selamat Siang $nama! Tetap semangat ya...! &#128522';
                            
                                var delay=5;
                                var currentChar=1;
                                var destination='[none]';
                                function type()
                                {
                                //if (document.all)
                                {
                                var dest=document.getElementById(destination);
                                if (dest)// && dest.innerHTML)
                                {
                                dest.innerHTML=text.substr(0, currentChar)+'<blink>_</blink>';
                                currentChar++;
                                if (currentChar>text.length)
                                {
                                currentChar=1;
                                setTimeout('type()', 5000);
                                }
                                else
                                {
                                setTimeout('type()', delay);
                                }
                                }
                                }
                                }
                                function startTyping(textParam, delayParam, destinationParam)
                                {
                                text=textParam;
                                delay=delayParam;
                                currentChar=1;
                                destination=destinationParam;
                                type();
                                }
                                </script> <b><div 0px='' 12px='' arial='' color:='' ff0000='' font:='' id='textDestination' margin:='' style='background-color: none;'></div></b> <script language='JavaScript'>
                                javascript:startTyping(text, 50, 'textDestination');
                                </script>

                                ";
                        } elseif ($hour >= 15 && $hour <= 17) {
                            echo "
                                <script language='JavaScript'>
                                var text='Selamat Sore $nama! Tetap semangat ya...! &#128522';
                                var delay=5;
                                var currentChar=1;
                                var destination='[none]';
                                function type()
                                {
                                //if (document.all)
                                {
                                var dest=document.getElementById(destination);
                                if (dest)// && dest.innerHTML)
                                {
                                dest.innerHTML=text.substr(0, currentChar)+'<blink>_</blink>';
                                currentChar++;
                                if (currentChar>text.length)
                                {
                                currentChar=1;
                                setTimeout('type()', 5000);
                                }
                                else
                                {
                                setTimeout('type()', delay);
                                }
                                }
                                }
                                }
                                function startTyping(textParam, delayParam, destinationParam)
                                {
                                text=textParam;
                                delay=delayParam;
                                currentChar=1;
                                destination=destinationParam;
                                type();
                                }
                                </script> <b><div 0px='' 12px='' arial='' color:='' ff0000='' font:='' id='textDestination' margin:='' style='background-color: none;'></div></b> <script language='JavaScript'>
                                javascript:startTyping(text, 50, 'textDestination');
                                </script>

                                ";
                        } elseif ($hour >= 17 && $hour <= 18) {
                            echo "
                                <script language='JavaScript'>
                                var text='Selamat Petang $nama! Tetap semangat ya...! &#128522';
                                var delay=5;
                                var currentChar=1;
                                var destination='[none]';
                                function type()
                                {
                                //if (document.all)
                                {
                                var dest=document.getElementById(destination);
                                if (dest)// && dest.innerHTML)
                                {
                                dest.innerHTML=text.substr(0, currentChar)+'<blink>_</blink>';
                                currentChar++;
                                if (currentChar>text.length)
                                {
                                currentChar=1;
                                setTimeout('type()', 5000);
                                }
                                else
                                {
                                setTimeout('type()', delay);
                                }
                                }
                                }
                                }
                                function startTyping(textParam, delayParam, destinationParam)
                                {
                                text=textParam;
                                delay=delayParam;
                                currentChar=1;
                                destination=destinationParam;
                                type();
                                }
                                </script> <b><div 0px='' 12px='' arial='' color:='' ff0000='' font:='' id='textDestination' margin:='' style='background-color: none;'></div></b> <script language='JavaScript'>
                                javascript:startTyping(text, 50, 'textDestination');
                                </script>

                                ";
                        } elseif ($hour >= 19 && $hour <= 23) {
                            echo "
                                <script language='JavaScript'>
                                var text='Selamat Malam $nama! Tetap semangat ya...! &#128522';
                                var delay=5;
                                var currentChar=1;
                                var destination='[none]';
                                function type()
                                {
                                //if (document.all)
                                {
                                var dest=document.getElementById(destination);
                                if (dest)// && dest.innerHTML)
                                {
                                dest.innerHTML=text.substr(0, currentChar)+'<blink>_</blink>';
                                currentChar++;
                                if (currentChar>text.length)
                                {
                                currentChar=1;
                                setTimeout('type()', 5000);
                                }
                                else
                                {
                                setTimeout('type()', delay);
                                }
                                }
                                }
                                }
                                function startTyping(textParam, delayParam, destinationParam)
                                {
                                text=textParam;
                                delay=delayParam;
                                currentChar=1;
                                destination=destinationParam;
                                type();
                                }
                                </script> <b><div 0px='' 12px='' arial='' color:='' ff0000='' font:='' id='textDestination' margin:='' style='background-color: none;'></div></b> <script language='JavaScript'>
                                javascript:startTyping(text, 50, 'textDestination');
                                </script>

                                ";
                            }

                            ?>
                      </a>
                  </li>


              </ul>
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

            <!-- Right navbar links
              <ul class="navbar-nav ml-auto">
                  Messages Dropdown Menu
                  <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                          <i class="far fa-comments"></i>
                          <span class="badge badge-danger navbar-badge">3</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                          <a href="#" class="dropdown-item">
                              Message Start
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
                              Message End
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                              Message Start
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
                              Message End
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item">
                              Message Start
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
                              Message End
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                      </div>
                  </li>
                  Notifications Dropdown Menu
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
              </ul> -->
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
                        <img src="<?= base_url('material/myreport/profil/' . $user['foto_profil']) ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url('profile') ?>" class="d-block"><?= $user['nama'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-header">GENERAL</li>
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class=" nav-header">MASTER DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('data_report') ?>" class="nav-link active">
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



                        <li class=" nav-header">MASTER USER</li>
                        <li class="nav-item">
                            <a href="<?= base_url('data_user') ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data User
                                </p>
                            </a>
                        </li>

                        <li class=" nav-header">WEB APP</li>
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#modal-backup" class="nav-link">
                                <i class="nav-icon fas fa-file-download"></i>
                                <p>
                                    Backup Database
                                </p>
                            </a>
                        </li>

                        <!-- <li class=" nav-header">FORM INPUT</li>
                <li class="nav-item">
                    <a href="<?= base_url('input_barang') ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Input Barang
                        </p>
                    </a>
                </li> -->


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
                <div class="row">
                    <div class="col-12">
                        <?= $this->session->flashdata('pesan') ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Data Report</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
							<div class="table-responsive">
                                <div class="mb-3 text-center">


                                    <div class="btn-group">
                                        <button type="button" class="btn btn btn-primary " data-toggle="modal" data-target="#tambah_report"><i class="fas fa-plus"></i> Tambah Data</button>
                                        <a class="btn btn-success" href="<?= base_url('admin/data_report/form') ?>"><i class="fas fa-upload"></i> Import</a>
                                        <a class="btn btn-warning" href="<?= base_url('admin/data_report/export_excel') ?>"><i class="fas fa-file-excel"></i> Export Excell</a>
										
                                        <!-- <button class="btn btn-secondary ml-2" data-toggle="modal" data-target="#modal-backup"><i class="fas fa-file-download"></i> Backup Data</button> -->

                                    </div>


                                </div>


                                <form action="<?= base_url('admin/data_report/remove') ?>" method="POST">
                                   <table id="table_filter" class="table table-bordered table-hover table-striped display" width="100%">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="checked-all" onClick="toggle(this)"></th>
                                                <th width="10px">No</th>
                                                <th width="20px">Date</th>
                                                <th width="20px">Line</th>
                                                <th width="20px">T-Start</th>
                                                <th width="20px">T-Finish</th>
                                                <th width="20px">Duration</th>
                                                <th width="20px">Type</th>
                                                <th width="50px">Equipment</th>
                                                <th width="50px">Item</th>
                                                <th width="50px">Model</th>
                                                <th width="50px">File</th>
                                                <th width="100px">Pic</th>
                                                <th width="200px">Aksi</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($report as $rpt) : ?>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="id_report[]" value="<?php echo $rpt->id_report ?>"></td>
                                                    <th><?= $no++ ?></th>
                                                    <td><?= $rpt->date ?></td>
                                                    <td><?= $rpt->line ?></td>
                                                    <td><?= $rpt->tstart ?></td>
                                                    <td><?= $rpt->tfinish ?></td>
                                                    <td><?= $rpt->duration ?></td>
                                                    <td><?= $rpt->type ?></td>
                                                    <td><?= $rpt->eqp ?></td>
                                                    <td><?= $rpt->item ?></td>
                                                    <td><?= $rpt->model ?></td>
                                                    <td><?= $rpt->file ?></td>
                                                    <td><?= $rpt->pic ?></td>
                                                    <td>
                                                        <a href id="detail_report" class="btn btn-success btn-xs " data-toggle="modal" data-target="#detail-report" data-line="<?= $rpt->line ?>" data-type="<?= $rpt->type ?>" data-eqp="<?= $rpt->eqp ?>" data-problem="<?= $rpt->problem ?>" data-action="<?= $rpt->action ?>" data-cause="<?= $rpt->cause ?>"data-note="<?= $rpt->note ?>">
                                                            <i class=" fa fa-search-plus text-white"> Detail</i></a>


                                                        <a href="<?= base_url('admin/data_report/edit_report/' . $rpt->id_report) ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"> Edit</i></a>

                                                        <a href="<?= base_url('admin/data_report/hapus_report/' . $rpt->id_report) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class=" fa fa-trash"> Delete</i></a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th><input type="checkbox" onClick="toggle(this)"></th>
                                                <th width="10px">No</th>
                                                <th width="20px">Date</th>
                                                <th width="20px">Line</th>
                                                <th width="20px">T-Start</th>
                                                <th width="20px">T-Finish</th>
                                                <th width="20px">Duration</th>
                                                <th width="20px">Type</th>
                                                <th width="50px">Equipment</th>
                                                <th width="50px">Item</th>
                                                <th width="50px">Model</th>
                                                <th width="50px">File</th>
                                                <th width="10px">Pic</th>
                                                <th width="200px">Aksi</th>

                                            </tr>
                                        </tfoot>
                                    </table>

                                    <button class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Apakah anda yakin menghapus data yang terpilih?')"><i class=" fas fa-trash"></i> Hapus Data Terpilih</button>
                                </form>




                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <div class="modal fade" id="tambah_report" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('tambah_report') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="date" class="form-control" id="data_report" placeholder="" name="date" required aria-readonly="true" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Line</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="line" required>
                                           <option selected="selected">--</option>
                                            <option value="MA 02">MA 02</option>
                                            <option value="MA 04">MA 04</option>
                                            <option value="MA 05">MA 05</option>
                                            <option value="MA 07">MA 07</option>
                                            <option value="MA 10">MA 10</option>
                                            <option value="MA 15">MA 15</option>
                                            <option value="MA 16">MA 16</option>
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
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="tstart" required />
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <label for="exampleInputPassword1">Time Finish</label>
                                    <div class="input-group date form-group" id="timepicker2" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker2" name="tfinish" required />
                                        <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="type" required>
                                            <option selected="selected">--</option>
                                            <option value="Trouble">Trouble</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Improve">Improve</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Equipment</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="eqp" required>
                                            <option selected="selected">--</option>
                                            <option value="UR">UR</option>
                                            <option value="VIM">VIM</option>
                                            <option value="MELVA">MELVA</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Item</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" name="item" Onkeyup="this.value=this.value.toUpperCase()"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Model</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" name="model" Onkeyup="this.value=this.value.toUpperCase()" required>
                                    </div>


                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">File</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" name="file" Onkeyup="this.value=this.value.toUpperCase()" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Problem</label>

                                        <textarea class="form-control" name="problem" rows="4" placeholder=""></textarea>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleInputEmail1">Cause</label>

                                        <textarea class="form-control" name="cause" rows="3" placeholder=""></textarea>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Action</label>

                                        <textarea class="form-control" name="action" rows="3" placeholder=""></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Note</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" name="note" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pic</label>
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" name="pic" Onkeyup="this.value=this.value.toUpperCase()" required>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- MODAL REPORT DETAIL -->
        <div class="modal fade" id="detail-report">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Report</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-hover " width="100%">
                            <tbody>
                                <tr>
                                    <th>Line</th>
                                    <td><span id="line"></span></td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td><span id="type"></span></td>
                                </tr>
                                <tr>
                                    <th>Equipment</th>
                                    <td><span id="eqp"></span></td>
                                </tr>
                                <tr>
                                    <th>Problem</th>
                                    <td>
                                        <textarea class="form-control" name="" id="problem" cols="20" rows="2" disabled></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cause</th>
                                    <td>
                                        <textarea class="form-control" name="" id="cause" cols="20" rows="2" disabled></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <textarea class="form-control" style="outline: none" name="" id="action" cols="20" rows="2" aria-disabled="true" disabled></textarea>
                                    </td>
                                </tr>
								   <tr>
                                    <th>Note</th>
                                    <td>
                                        <textarea class="form-control" name="" id="note" cols="20" rows="2" disabled></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- MODAL EDIT REPORT -->
        <div class="modal fade" id="edit-report" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Edit Report</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="body-edit-report">
                        <form id="form-edit-report" method="POST">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="text" class="form-control" id="date-report" placeholder="" name="date" required aria-readonly="true" readonly required>

                                    </div>
                                    <div class="form-group">
                                        <label>Line</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="line" id="line" required disabled>
                                            <option selected="selected"></option>
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
                                    <div class="input-group date form-group" id="timepicker3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker3" id="tstart" name="tstart" required />
                                        <div class="input-group-append" data-target="#timepicker3" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <label for="exampleInputPassword1">Time Finish</label>
                                    <div class="input-group date form-group" id="timepicker4" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker4" id="tfinish" name="tfinish" required />
                                        <div class="input-group-append" data-target="#timepicker4" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="type" required disabled>
                                            <option selected="selected">--</option>
                                            <option value="Trouble">Trouble</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Improve">Improve</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Equipment</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="eqp" required disabled>
                                            <option selected="selected">--</option>
                                            <option value="UR">UR</option>
                                            <option value="VIM">VIM</option>
                                            <option value="MELVA">MELVA</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Item</label>
                                        <input type="text" class="form-control" id="item" aria-describedby="emailHelp" placeholder="" name="item" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Model</label>
                                        <input type="text" class="form-control" id="model" aria-describedby="emailHelp" placeholder="" name="model" required>
                                    </div>


                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">File</label>
                                        <input type="text" class="form-control" id="file" aria-describedby="emailHelp" placeholder="" name="file" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Problem</label>

                                        <textarea class="form-control" name="problem" id="problem" rows="4" placeholder=""></textarea>

                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleInputEmail1">Cause</label>

                                        <textarea class="form-control" name="cause" rows="3" id="cause" placeholder=""></textarea>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Action</label>

                                        <textarea class="form-control" name="action" rows="3" id="action" placeholder=""></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Note</label>
                                        <input type="text" class="form-control" id="note" aria-describedby="emailHelp" placeholder="" name="note" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pic</label>
                                        <input type="text" class="form-control" id="pic" aria-describedby="emailHelp" placeholder="" name="pic" required>
                                    </div>
                                </div>

                            </div>



                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->


            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- MODAL BACKUP -->
        <div class="modal fade" id="modal-backup">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Backup Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/dashboard/backup_data') ?>" method="POST">
                        <div class="modal-body">
                            <p>Hallo <span class="text-uppercase text-bold"><?= $akun['nama'] ?></span><br> Apakah anda yakin untuk membackup data ini?</p>
                            <p>Silahkan masukkan password akun anda terlebih dahulu</p>
                            <div class="form-group">
                                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Password anda" name="password">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Yakin</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>