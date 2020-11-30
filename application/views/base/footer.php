 <footer class="main-footer">
     <strong>Copyright &copy; <?= date('Y') ?> <a href="#">Automation</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 1.0
     </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/sparklines/sparkline.js"></script> -->
 <!-- JQVMap -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/moment/moment.min.js"></script>
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>dist/js/adminlte.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes)
 <script src="<?= base_url('material/myreport/adminlte/') ?>dist/js/pages/dashboard.js"></script> -->
 <!-- AdminLTE for demo purposes -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>dist/js/demo.js"></script>


 <!-- Bootstrap 4 -->
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables -->
 <script src="<?= base_url('material/myreport/') ?>js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url('material/myreport/adminlte/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
 <script src="<?= base_url('material/myreport/') ?>js/dataTables.select.min.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->




 <script>
     var table = $(".tabel").attr("data-uri");
     var dataTable = $('.tabel').DataTable({
         paging: "false",
         info: "false",
         processing: true,
         ajax: {
             url: table,
             type: "POST",
         }
     });


     $(function() {
         $(function() {
             $("#date_report").datepicker({
                 dateFormat: 'dd-mm-yy'
             });
             $("#date-report").datepicker({
                 dateFormat: 'dd-mm-yy'
             });

         });
         //Timepicker
         //Timepicker
         $('#timepicker').datetimepicker({
             format: 'HH:mm'
         })
         $('#timepicker2').datetimepicker({
             format: 'HH:mm'
         })

         $('#timepicker3').datetimepicker({
             format: 'HH:mm'
         })
         $('#timepicker4').datetimepicker({
             format: 'HH:mm'
         })

     });
 </script>
 <script>
     $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });
 </script>

 <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
 <script type="text/javascript">
     $(function() {
         $("#btn-gantipass").click(function() {
             var password = $("#pass1").val();
             var pass2 = $("#pass2").val();
             var filter = [
                 'anjing',
                 'babi', ,
             ];
             if (password != pass2) {
                 alert("Password tidak sesuai!");
                 return false;
             }
             return true;
             if (password.pass2 = filter) {
                 alert("Password dilarang!");
                 return false;
             }
             return true;

         });
     });
 </script>
 <!-- 
 <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script> -->
 <script>
     setInterval(function() {
         $(".berkedip").toggle();
     }, 300);
 </script>

 <!-- <script type="text/javascript">
     function showTime() {

         var a_p = "";
         var today = new Date();
         var curr_hour = today.getHours();
         var curr_minute = today.getMinutes();
         var curr_second = today.getSeconds();
         if (curr_hour < 12) {
             a_p = "AM";
         } else {
             a_p = "PM";
         }
         if (curr_hour == 0) {
             curr_hour = 12;
         }
         if (curr_hour > 12) {
             curr_hour = curr_hour - 12;
         }
         curr_hour = checkTime(curr_hour);
         curr_minute = checkTime(curr_minute);
         curr_second = checkTime(curr_second);
         document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
     }

     function checkTime(i) {
         if (i < 10) {
             i = "0" + i;
         }
         return i;
     }
     setInterval(showTime, 500);
     //
 </script> -->


 <script>
     $(function() {
         // $('#table_report').DataTable({

         // });
         $("#example3").DataTable({
             select: true,
             select: {
                 style: 'multi'
             }
         });

         $("#example1").DataTable({

         });


         var table = $('#table_filter').DataTable({

             "order": [
                 [1, "asc"]
             ],
             "oLanguage": {
                 "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
             }

         });

         $("#table_filter tfoot th").each(function(i) {

             if ($(this).text() !== '') {
                 var isStatusColumn = (($(this).text() == 'Status') ? true : false);
                 var select = $('<select><option value=""></option></select>')
                     .appendTo($(this).empty())
                     .on('change', function() {
                         var val = $(this).val();

                         table.column(i)
                             .search(val ? '^' + $(this).val() + '$' : val, true, false)
                             .draw()
                     });

                 // Get the Status values a specific way since the status is a anchor/image
                 if (isStatusColumn) {
                     var statusItems = [];

                     /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                     table.column(i).nodes().to$().each(function(d, j) {
                         var thisStatus = $(j).attr("data-filter");
                         if ($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                     });

                     statusItems.sort();

                     $.each(statusItems, function(i, item) {
                         select.append('<option value="' + item + '">' + item + '</option>');
                     });

                 }
                 // All other non-Status columns (like the example)
                 else {
                     table.column(i).data().unique().sort().each(function(d, j) {
                         select.append('<option value="' + d + '">' + d + '</option>');
                     });
                 }

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

     function refresh_report(){
        var url_refresh = "<?= base_url('admin/data_report') ?>";
        window.location.href = url_refresh;
     }
 </script>
 <script>
     $(document).ready(function() {
         $(document).on('click', '#detail_report', function() {
             var line = $(this).data('line');
             var type = $(this).data('type');
             var eqp = $(this).data('eqp');
             var problem = $(this).data('problem');
             var cause = $(this).data('cause');
             var action = $(this).data('action');
             var note = $(this).data('note');

             $('#line').text(line);
             $('#type').text(type);
             $('#eqp').text(eqp);
             $('#problem').text(problem);
             $('#cause').text(cause);
             $('#action').text(action);
             $('#note').text(note);
         })
     })
 </script>

 <!-- <script>
     $(document).ready(function() {
         $(document).on('click', '#edit_report', function() {
             var idrep = $(this).data('idrep');
             var date = $(this).data('date');
             var line = $(this).data('line');
             var tstart = $(this).data('tstart');
             var tfinish = $(this).data('tfinish');
             var model = $(this).data('model');
             var file = $(this).data('file');
             var item = $(this).data('item');
             var type = $(this).data('type');
             var eqp = $(this).data('eqp');
             var problem = $(this).data('problem');
             var cause = $(this).data('cause');
             var action = $(this).data('action');
             var note = $(this).data('note');
             var pic = $(this).data('pic');

             $('#body-edit-report #date-report').val(date);
             $('#body-edit-report #tstart').val(tstart);
             $('#body-edit-report #tfinish').val(tfinish);
             $('#body-edit-report #model').val(model);
             $('#body-edit-report #file').val(file);
             $('#body-edit-report #item').val(item);
             $('#body-edit-report #note').val(note);
             $('#body-edit-report #pic').val(pic);
             $('#body-edit-report #line-edit').val(line);
             $('#body-edit-report #type').val(type);
             $('#body-edit-report #eqp').val(eqp);
             $('#body-edit-report #problem').text(problem);
             $('#body-edit-report #cause').val(cause);
             $('#body-edit-report #action').val(action);
         })
     })
 </script> -->

 <script>
     $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
         $("#checked-all").click(function() { // Ketika user men-cek checkbox all
             if ($(this).is(":checked")) // Jika checkbox all diceklis
                 $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
             else // Jika checkbox all tidak diceklis
                 $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
         });

         $("#btn-delete").click(function() { // Ketika user mengklik tombol delete
             var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

             if (confirm) // Jika user mengklik tombol "Ok"
                 $("#form-delete").submit(); // Submit form
         });
     });


     // $('.lazy').Lazy({
     //     // your configuration goes here
     //     scrollDirection: 'vertical',
     //     effect: 'fadeIn',
     //     visibleOnly: true,
     //     onError: function(element) {
     //         console.log('error loading ' + element.data('src'));
     //     }
     // });

     // $(".lazy").Lazy({
     //     beforeLoad: function(element) {
     //         // called before an elements gets handled
     //     },
     //     afterLoad: function(element) {
     //         // called after an element was successfully handled
     //     },
     //     onError: function(element) {
     //         // called whenever an element could not be handled
     //     },
     //     onFinishedAll: function() {
     //         // called once all elements was handled
     //     }
     // });

     function export_excel(){
        // alert('export');
        var date1 = $("#aw").val();
        var date2 = $("#akh").val();

        var url_export = "<?= base_url('admin/data_report/export_excel/') ?>";

        window.open(url_export + date1 +'/'+ date2, "_blank");
     }
 </script>






 </body>

 </html>