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




                        <li class="nav-header">WEB APP</li>
                        <li class="nav-item">
                            <a href="<?= base_url('profile') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-id-card"></i>
                                <p>Profil Saya</p>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('material/myreport/profil/' . $user['foto_profil']) ?>" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?= $user['nama'] ?></h3>

                                    <?php
                                    if ($user['jabatan']  == 1) {
                                        echo "<p class='text-muted text-center'>Super Administrator</p>";
                                    } else if ($user['jabatan'] == 2) {
                                        echo "<p class='text-muted text-center'>Administrator</p>";
                                    } else if ($user['jabatan'] == 3) {
                                        echo "<p class='text-muted text-center'>Member</p>";
                                    }

                                    ?>
                                    <!-- 
                                      <ul class="list-group list-group-unbordered mb-3">
                                          <li class="list-group-item">
                                              <b>Followers</b> <a class="float-right">1,322</a>
                                          </li>
                                          <li class="list-group-item">
                                              <b>Following</b> <a class="float-right">543</a>
                                          </li>
                                          <li class="list-group-item">
                                              <b>Friends</b> <a class="float-right">13,287</a>
                                          </li>
                                      </ul> -->

                                    <!-- <b href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tentang</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- <strong><i class="fas fa-book mr-1"></i> Status</strong>

                                    <p class="text-muted">
                                        <?= $user['status_pribadi'] ?>
                                    </p>
 -->
                                 <!--    <hr>

                                   <!--  <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                                    <p class="text-muted"><?= $user['alamat'] ?></p> -->

                                    <hr>

                                   <!--  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        <?= $user['skill'] ?>
                                    </p> -->
 
                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Terdaftar pada</strong>

                                    <p class="text-muted"><?= date('d F Y', $user['tgl_daftar']) ?></p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab">Info</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#foto_profil" data-toggle="tab">Foto Profil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#ganti_password" data-toggle="tab">Ganti Password</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <?= $this->session->flashdata('pesan') ?>
                                <div class="card-body">
								<div class="table-responsive">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="info">
                                            <h4>Halo <?= $user['nama'] ?> ! </h4>
                                            <p>Berikut ini adalah detail akun anda : </p>


                                            <div class="row">
                                                <div class="col-md-12 ">

                                                    <table class="table table-striped">
                                                        <tr>
                                                            <th width="100px">Kode</th>
                                                            <td><?= $user['kode'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Foto Profil</th>
                                                            <td><img class="img-fluid profile-user-img" src="<?= base_url('material/myreport/profil/' . $user['foto_profil']) ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <td><?= $user['nama'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td><?= $user['email'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Username</th>
                                                            <td><?= $user['username'] ?></td>
                                                        </tr>
                                                        <!-- <tr>
                                                                  <th width="200px">Password</th>
                                                                  <td width="5px"><?= ($user['password']) ?></td>
                                                              </tr> -->
                                                       <!--  <tr>
                                                            <th>Status</th>
                                                            <td width="50px"><?= ($user['status_pribadi']) ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Skill</th>
                                                            <td><?= $user['skill'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Alamat</th>
                                                            <td><?= $user['alamat'] ?></td>
                                                        </tr> -->
                                                    </table>
                                                </div>

                                            </div>



                                        </div>

                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal" method="POST" action="<?= base_url('admin/profile/update_data') ?>">
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Kode User</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName" name="kode" value="<?= $user['kode'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName" name="nama" value="<?= $user['nama'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $user['email'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail" name="username" value="<?= $user['username'] ?>">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label for="inputstatus" class="col-sm-2 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="status_pribadi" required id="inputstatus">
                                                            <option selected="selected">--</option>
                                                            <option value="Karyawan 1">Karyawan 1</option>
                                                            <option value="Karyawan 2">Karyawan 2</option>                            
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="alamat" id="" class="form-control" cols="5" rows="5"><?= $user['alamat'] ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputstatus" class="col-sm-2 col-form-label">Skill</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="skill" required id="inputstatus">
                                                            <option selected="selected"><?= $user['skill'] ?></option>
                                                            <option value="Web Development">Web Development</option>
                                                            <option value="Computer Programing">Computer Programing</option>
                                                            <option value="Desktop Programing">Desktop Programing</option>
                                                            <option value="Web Programming">Web Programming</option>
															                                     <option value="Networking">Networking</option>
															                                     <option value="Electrical">Electrical</option>
															                                     <option value="Mechanical">Mechanical</option>
															

                                                        </select>
                                                    </div>

                                                </div> -->

                                                <div class="form-group row text-right">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-block btn-primary">Update & Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="foto_profil">

                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <p class="text-uppercase text-center badge-pill badge-btn badge-success m-0">Foto saat ini</p>
                                                    <img src="<?= base_url('material/myreport/profil/' . $user['foto_profil']) ?>" class="card-img" width="50%" alt="...">
                                                    <p class="text-underline text-center badge-pill badge-btn badge-success"> <i>"material/myreport/profil/<?= $user['foto_profil'] ?>"</i></p>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-2">Update Foto Profil</h5>
                                                        <form action="<?= base_url('admin/profile/update_foto_profil') ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <input type="text" name="kode" value="<?= $user['kode'] ?>" hidden>
                                                            </div>
                                                            <div class="custom-file form-group">

                                                                <input type="file" class="custom-file-input" id="customFile" name="foto_profil" required>
                                                                <label class="custom-file-label" for="customFile">Pilih file</label>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <button type="submit" class="btn btn-block btn-primary">Update & Simpan</button>
                                                            </div>
                                                        </form>
                                                        <!-- <small class="card-text"><small class="text-muted text-danger">*jpg,*jpeg,*png</small></p> -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="ganti_password">

                                            <form action="<?= base_url('admin/profile/ganti_password') ?>" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Kode User</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputName" name="kode" value="<?= $user['kode'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group ">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Password Baru</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" placeholder="Password (Panjang minimal 8)" id="pass1" name="password" minlength="8" required="required">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputName" class="col-sm-2 col-form-label">Ulangi Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control" placeholder="Password (Panjang minimal 8)" id="pass2" name="pass2" minlength="8" required="required">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mt-2">
                                                            <div class="col-sm-10">
                                                                <button type="submit" id="btn-gantipass" class="btn btn-block btn-primary">Update & Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </form>



                                        </div>
                                        <!-- /.tab-pane -->


                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->


        </div>
        <!-- /.content-wrapper -->