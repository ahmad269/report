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
                            <a href="<?= base_url('data_report') ?>" class="nav-link ">
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
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Edit Data UR
                                </p>
                            </a>
                        </li>

                        <li class=" nav-header">MASTER UR</li>


                        <li class="nav-item">
                            <a href="<?= base_url('file_ur') ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-archive"></i>
                                <p>
                                    File UR
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" data-target="#guide_ur" data-toggle="modal">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Guidence UR
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
                <div class="container-fluid">
                    <form action="<?= base_url('ur/data_ur/updated') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-5 pr-5">
                                <?php foreach ($data as $dt) : ?>



                                    <div class="form-group">
                                        <label for="exampleInputEmail1">serial</label>
                                        <input type="hidden" class="form-control" id="exampleInputPassword1" placeholder="" name="id" value="<?= $dt->id_ur ?>">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="serial" value="<?= $dt->serial ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="name" value="<?= $dt->name ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">file</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="file" value="<?= $dt->file ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>location</label>
                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="location">
                                            <option selected="selected"><?= $dt->location ?></option>
                                            <<option value="MA 02">MA 02</option>
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

                                        </select></div>
                                    <div class="text-right">
                                        <a href="<?= base_url('data_ur') ?>" class="btn btn-danger">Batal</a>
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