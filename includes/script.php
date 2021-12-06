
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CKEditor -->
<script src="ckeditor/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1',{filebrowserImageBrowseUrl : 'kcfinder'} );

</script>
<!-- bootstrap datepicker -->
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<script>
  //Date picker
  $('#datepicker').datepicker({
		format: "dd/mm/yyyy",
		orientation: "top auto",
		todayHighlight: true,
    autoclose: true
  });

  //Date picker
  $('#datepicker-monthly').datepicker({
			format: "mm/yyyy",
			minViewMode : 1,
			orientation: "top auto",
			todayHighlight: true
  });
</script>

<!-- <script type="text/javascript" src="asstes/chartjs/Chart.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script>

  //Grafik line QTY
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["4", "15", "6", "9"],
      datasets: [{
        // label: 'Lol',
        data: [
        <?php 
        $jumlah_teknik = mysqli_query($koneksi,"select * from master_barang where qty='4'");
        echo mysqli_num_rows($jumlah_teknik);
        ?>, 
        <?php 
        $jumlah_ekonomi = mysqli_query($koneksi,"select * from master_barang where qty='15'");
        echo mysqli_num_rows($jumlah_ekonomi);
        ?>, 
        <?php 
        $jumlah_fisip = mysqli_query($koneksi,"select * from master_barang where qty='6'");
        echo mysqli_num_rows($jumlah_fisip);
        ?>, 
        <?php 
        $jumlah_pertanian = mysqli_query($koneksi,"select * from master_barang where qty='9'");
        echo mysqli_num_rows($jumlah_pertanian);
        ?>
        ],
        backgroundColor: [
        'rgba(21, 250, 131, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
        'rgba(21, 250, 131, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

  //Grafik Batang Supplier Name
  var ctx = document.getElementById("lineChart").getContext('2d');
  var lineChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Sugity (2)", "MAHSING"],
      datasets: [{
        // label: 'Lol',
        data: [
        <?php 
        $jumlah_teknik = mysqli_query($koneksi,"select * from master_barang where supplier_name='Sugity (2)'");
        echo mysqli_num_rows($jumlah_teknik);
        ?>, 
        <?php 
        $jumlah_ekonomi = mysqli_query($koneksi,"select * from master_barang where supplier_name='MAHSING'");
        echo mysqli_num_rows($jumlah_ekonomi);
        ?>
        ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });


  //Grafik Batang OPB 6 Bulan
  var ctx = document.getElementById("monthChart").getContext('2d');
  var lineChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Oktober", "November", "Desember", "Januari", "Februari", "Maret"],
      datasets: [{
        // label: 'Oktober',
        data: [
        <?php 
        $jumlah_oktober = mysqli_query($koneksi,"SELECT * FROM detail_opb WHERE created_at LIKE '%2021-10%' ");
        echo mysqli_num_rows($jumlah_oktober);
        ?>, 
        <?php 
        $jumlah_november = mysqli_query($koneksi,"SELECT * FROM detail_opb WHERE created_at LIKE '%2021-11%'");
        echo mysqli_num_rows($jumlah_november);
        ?>
        ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

</script>

<script type="text/javascript">
  function isi_auto(){
      var key_end = $("#key_end").val();
      $.ajax({
          url: 'ajax_summary.php',
          data:"key_end="+key_end ,
      }).success(function (data) {
          var json = data,
          obj = JSON.parse(json);
          $('#part_no').val(obj.part_no);
          $('#part_name').val(obj.part_name);
          $('#plant').val(obj.plant);
          $('#sloc').val(obj.sloc);
          $('#value').val(obj.value);
          $('#stock').val(obj.stock);
      });
  }
</script>

  </body>
</html>
