  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2022</strong> - Sistem Informasi Cannery
  </footer>

  
</div>


<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>

<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../assets/dist/js/adminlte.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>
 
<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<link rel="stylesheet" type="text/css" href="Chartjs/Chart.min.css">
<script type="text/javascript" src="Chartjs/Chart.min.js"> </script>


<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>



<script src="../assets/dist/js/pages/dashboard.js"></script>

<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/bower_components/ckeditor/ckeditor.js"></script>

<script>
  $(document).ready(function(){

   // $(".edit").hide();
   $('#resume_cannery_a').DataTable()
   $('#resume_cannery_b').DataTable()
   $('#resume_cannery_all').DataTable()
   $('#resume_cannery_bulanan').DataTable()
   $('#table-datatable').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : true,
    "pageLength": 50
  });



 });
  
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
  }).datepicker("setDate", new Date());

  $('.datepicker2').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  });


</script>

<script>
var barChartData = {
  labels: [
     <?php 
     if (isset($_POST['filter'])) {
      $dari_tgl =  mysqli_real_escape_string($koneksi,$_POST['dari_tgl']);
      $sampai_tgl = mysqli_real_escape_string($koneksi,$_POST['sampai_tgl']);
      $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_a WHERE tanggal BETWEEN '$dari_tgl' AND '$sampai_tgl' order by tanggal asc ");
     }
   else {
    $tgl = date('m');
    $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_a where month(tanggal) ='$tgl' order by tanggal asc");
   }

 
  while($t = mysqli_fetch_array($tanggal)){
    ?>
    "<?php echo $t['tanggal']; ?>",
    <?php 
  }
  ?>

  

  ],

  datasets: [
    {
      label: "Shift A",
      backgroundColor: "pink",
      borderColor: "red",
      borderWidth: 1,
      data: [
                <?php 
                 if (isset($_POST['filter'])) {
                  $dari_tgl =  mysqli_real_escape_string($koneksi,$_POST['dari_tgl']);
                  $sampai_tgl = mysqli_real_escape_string($koneksi,$_POST['sampai_tgl']);
                  $tanggal = mysqli_query($koneksi,"SELECT *  FROM resume_cannery_a WHERE tanggal BETWEEN '$dari_tgl' AND '$sampai_tgl' order by tanggal asc ");
                 }
               else {
                $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_a order by tanggal asc");
               }
             
                while($t = mysqli_fetch_array($tanggal)){
                    $total = mysqli_fetch_array(mysqli_query($koneksi,"SELECT sum(kapasitas) as kapasitas FROM resume_cannery_a where tanggal='".$t['tanggal']."' group by tanggal"));
                    ?>
                    "<?php echo $total['kapasitas']??0; ?>",
                    <?php 
                }
                ?>

            ]
    },
    {
      label: "Shift B",
      backgroundColor: "lightblue",
      borderColor: "blue",
      borderWidth: 1,
      data: [
       <?php 
                if (isset($_POST['filter'])) {
                  $dari_tgl =  mysqli_real_escape_string($koneksi,$_POST['dari_tgl']);
                  $sampai_tgl = mysqli_real_escape_string($koneksi,$_POST['sampai_tgl']);
                  $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_b WHERE tanggal BETWEEN '$dari_tgl' AND '$sampai_tgl' order by tanggal asc ");
                 }
               else {
                $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_b order by tanggal asc");
               }
                while($b = mysqli_fetch_array($tanggal)){
                    $total = mysqli_fetch_array(mysqli_query($koneksi,"SELECT sum(kapasitas) as kapasitas FROM resume_cannery_b where tanggal='".$b['tanggal']."' group by tanggal"));
                    ?>
                    "<?php echo $total['kapasitas']??0; ?>",
                    <?php 
                }
                ?>
            ]
    },
    {
      label: "Shift ALL",
      backgroundColor: "lightgreen",
      borderColor: "green",
      borderWidth: 1,
      data: [<?php 
       if (isset($_POST['filter'])) {
        $dari_tgl =  mysqli_real_escape_string($koneksi,$_POST['dari_tgl']);
        $sampai_tgl = mysqli_real_escape_string($koneksi,$_POST['sampai_tgl']);
        $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_all WHERE tanggal BETWEEN '$dari_tgl' AND '$sampai_tgl' order by tanggal asc ");
       }
     else {
      $tanggal = mysqli_query($koneksi,"SELECT * FROM resume_cannery_all order by tanggal asc");
     }
                while($c = mysqli_fetch_array($tanggal)){
                    $total = mysqli_fetch_array(mysqli_query($koneksi,"SELECT sum(kapasitas) as kapasitas FROM resume_cannery_all where tanggal='".$c['tanggal']."' group by tanggal"));
                    ?>
                    "<?php echo $total['kapasitas']??0; ?>",
                    <?php 
                }
                ?>
            ]
    },
  ]
};

var chartOptions = {
  responsive: true,
  legend: {
    position: "top"
  },
  title: {
    display: true,
    text: "Chart.js Bar Chart"
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}

  var ctx = document.getElementById("myChart").getContext("2d");
  window.myBar = new Chart(ctx, {
    type: "bar",
    data: barChartData,
    options: chartOptions
  });

</script>

<script>
    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels:  [
 <?php 
  if (isset($_POST['filter1'])) {
          $tahun =  mysqli_real_escape_string($koneksi,$_POST['tahun']);
          $bulan = mysqli_query($koneksi,"SELECT * FROM resume_cannery_bulanan WHERE tahun LIKE '$tahun'  ");
         }
       else {
        $bulan = mysqli_query($koneksi,"SELECT DISTINCT(bulan) as bulan FROM resume_cannery_bulanan");
       }
 
  while($b = mysqli_fetch_array($bulan)){
    ?>
    "<?php echo $b['bulan']; ?>",
    <?php 
  }
  ?>
],

        datasets: [{
          label: 'Data Bulanan',
          data: [
         <?php 
         if (isset($_POST['filter1'])) {
          $tahun = $_POST['tahun'];
          $bulan = mysqli_query($koneksi,"SELECT * FROM resume_cannery_bulanan WHERE tahun LIKE '%".$tahun."%'  ");
         } 
       else {
        $bulan = mysqli_query($koneksi,"SELECT * FROM resume_cannery_bulanan");
       }
              
                while($b = mysqli_fetch_array($bulan)){
                    
                   $total = mysqli_fetch_array(mysqli_query($koneksi,"SELECT (kapasitas) as kapasitas FROM resume_cannery_bulanan where bulan='".$b['bulan']."'"));
                    ?>
                    "<?php if(isset($_POST['filter1'])){ 
                      echo $b['kapasitas']??0;
                   }else{echo $total['kapasitas']??0;}?> ",
                    <?php 
                   
                }
                ?>
         

          ],
          backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(251, 140, 1, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(251, 140, 1,  1)'
                                
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

  <script>
    var ctx3 = document.getElementById('myChart3');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                    label: 'Pemasukan',
                    data: [<?php foreach ($pemasukanPerBulan as $pemPerBul) {
                                echo "'" . $pemPerBul['kapasitas'] . "', ";
                            } ?>],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script>

$(document).ready(function(){

  $('.datepicker').datepicker({
     
    format: 'yyyy-mm-dd',
    autoclose : true,
    todayHighlight : true

  });


});

</script>

</body>
</html>




