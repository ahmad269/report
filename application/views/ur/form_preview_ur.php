<html>

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $jdl ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('material/adminlte/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('material/crud/') ?>js/select.dataTables.min.css">
    <script src="<?= base_url('material/adminlte/') ?>plugins/datatables/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="<?= base_url('material/adminlte/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();
        });
    </script>
</head>

<body>
    <div class="container-fluid">

        <h3 class="pt-5 text-danger text-center text-uppercase">Form Impor File UR</h3>
        <hr>
        <p>Hallo <span class="text-uppercase text-bold"><?= $user['nama'] ?></span></p>
        <p>Ini adalah form import data File UR</p> Silahkan terlebih dahulu mendownload format File UR.
        <div class="mt-2">
            <a class="btn btn-block btn-success" href="<?= base_url('material/myreport/file_data/fileur/format_file_ur.xlsx') ?>"><i class="fas fa-file-excel mr-2"></i> Download Format</a>
        </div>
        <hr class="pt-2 pb-2">
        <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
        <form method="post" action="<?php echo base_url("ur/file_ur/form_ur"); ?>" enctype="multipart/form-data">
            <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
            <input class="form-control" type="file" name="file">

            <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
            <div class="mt-2">
                <button class="btn btn-primary btn-block" type="submit" name="preview" value="Preview" type="submit"> <i class="fas fa-search"></i> Preview</button>
            </div>
        </form>

        <?php
        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
            if (isset($upload_error)) { // Jika proses upload gagal
                echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
                die; // stop skrip
            }

            // Buat sebuah tag form untuk proses import data ke database
            echo "<form method='post' action='" . base_url("ur/file_ur/import") . "'>";

            // Buat sebuah div untuk alert validasi kosong
            //         echo "<div style='color: red;' id='kosong'>
            // Ada <span id='jumlah'></span> data yang belum diisi.
            // </div>";

            echo "<table id='example1' class='table table-bordered table-hover table-striped display'>
    <tr>
      <th colspan='15' class='text-center text-uppercase'>Preview Data</th>
    </tr>
    <tr>
      <th>Line</th>
      <th>Model</th>
      <th>File</th>
  
      
    </tr>";

            $numrow = 1;
            $kosong = 0;

            // Lakukan perulangan dari data yang ada di excel
            // $sheet adalah variabel yang dikirim dari controller
            foreach ($sheet as $row) {
                // Ambil data pada excel sesuai Kolom
                $line = $row['B']; // Ambil data Date
                $model = $row['C']; // Ambil data line
                $file = $row['D']; // 



                // Cek jika semua data tidak diisi
                if ($line == "" && $model == "" && $file == "")
                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if ($numrow > 1) {
                    // Validasi apakah semua data telah diisi
                    $line_td = (!empty($line)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                    $model_td = (!empty($model)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $file_td = (!empty($file)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah


                    // Jika salah satu data ada yang kosong
                    if ($line == "" && $model == "" && $file == "") {
                        $kosong++; // Tambah 1 variabel $kosong
                    }

                    echo "<tr>";
                    echo "<td" . $line_td . ">" . $line . "</td>";
                    echo "<td" . $model_td . ">" . $model . "</td>";
                    echo "<td" . $file_td . ">" . $file . "</td>";

                    echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
            }

            echo "</table>";

            // Cek apakah variabel kosong lebih dari 0
            // Jika lebih dari 0, berarti ada data yang masih kosong
            if ($kosong > 0) {
        ?>
                <script>
                    $(document).ready(function() {
                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        $("#jumlah").html('<?php echo $kosong; ?>');

                        $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                </script>
        <?php
            } else { // Jika semua data sudah diisi
                echo "<hr>";

                // Buat sebuah tombol untuk mengimport data ke database
                echo "<div class='text-right'>";
                echo "<a class='btn btn-danger' style='width: 300px;' href='" . base_url('data_report') . "'>Batal</a>";
                echo "<button class='btn btn-success ml-2' style='width: 300px;' type='submit' name='import'>Import</button>";

                echo "</div>";
            }

            echo "</form>";
        }
        ?>
    </div>


    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- jQuery -->
    <script src="<?= base_url('material/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('material/adminlte/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                select: true,
                select: {
                    style: 'multi'
                }
            });

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
</body>

</html>
</body>

</html>