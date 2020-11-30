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
                            <a href="<?= base_url('data_report') ?>" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Data Report
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
                            <a href="<?= base_url('backup_data') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Akses Back Up Data
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Log Out
                                </p>
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
            <div class="content-header">
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
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Table Akses Backup</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="mb-3">


                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#backup"><i class="fas fa-plus"></i> Tambah Data</button>

                                        </div>
                                    </div>
                                    <!-- <form action="<?= base_url('admin/backup/remove') ?>" method="POST"> -->
                                    <table id="example1" class="table table-bordered table-hover table-striped display">
                                        <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Dibuat pada :</th>
                                                <th>Berakhir pada :</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($data as $dt) : ?>
                                                <tr>
                                                    <td><input type="checkbox" name="id[]" value="<?php echo $dt->id_backup ?>"></td>

                                                    <td><?= ($dt->password) ?></td>
                                                    <td><?php
                                                        if ($dt->status == 1) {
                                                            echo "<span class='badge badge-pill badge-success'>Aktif</span>";
                                                        } else {
                                                            echo "<span class='badge badge-pill badge-danger'>Expired</span>";
                                                        }
                                                        ?></td>
                                                    <td><?= date('d F Y H:i:s', strtotime($dt->tgl_buat)) ?></td>
                                                    <td><?= date('d F Y H:i:s', strtotime($dt->batas_exp)) ?></td>
                                                    <form action="<?= base_url('admin/backup_data/hapus/' . $dt->id_backup) ?>" method="POST">
                                                        <td class="text-center">
                                                            <!-- <?= anchor('admin/backup_data/hapus/' . $dt->id_backup, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> -->
                                                            <button class="btn btn-sm btn-danger" type="submit" value="Hapus" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class=" fas fa-trash"></i></button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>

                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Dibuat pada :</th>
                                                <th>Berakhir pada :</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- <button class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('anda yakin?')"><i class=" fas fa-trash"></i> Hapus Data Terpilih</button> -->
                                    <!-- </form> -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->



                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

        <div class="modal fade" id="backup" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md">
                                <form action="<?= base_url('admin/backup_data/tambah_data') ?>" method="POST">
                                    <p>Hallo <span class="text-uppercase text-bold"><?= $akun['nama'] ?></span></p>
                                    <p>Ini adalah form input password untuk akses backup data. Pastikan anda mengingat password yang telah anda buat</p>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="password" required>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->