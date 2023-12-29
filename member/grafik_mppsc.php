<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">





    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <!-- Left col -->
      <section class="col-lg-12">

        <div class="nav-tabs-custom">

          <ul class="nav nav-tabs pull-right">
            <!-- <li><a href="#tab2" data-toggle="tab">Pemasukan</a></li> -->
            <li class="pull-left header">Grafik Data Man Power Productivity/SC</li>
          </ul>

          <div class="tab-content" style="padding: 20px">

            <div class="chart tab-pane active" id="tab1">
            <div class="row" >
              <p style="margin-left : 34px"><b> Cari Berdasarkan Tanggal :</b> </p>
              </div>

            <form  method="post">


              <div class="row" style="margin-left : 14px">
                <div class="col-md-2 ">
                <input type="text" autocomplete='off' class="form-control datepicker" name="dari_tgl" placeholder="Dari Tanggal">
                </div>
                <div class="col-md-2 ">
                <input type="text" autocomplete='off' class="form-control datepicker" name="sampai_tgl" placeholder="Sampai Tanggal">
                </div>
                <div class="col-md-2 ">
               <button type="submit"   class="btn btn-success btn-sm" name="filter" value="Submit"><i class="fa fa-search" aria-hidden="true"></i> Submit </button>
                </div>
                </div>
                </form>
            <h4 class="text-center">Grafik Data Man Power Productivity/SC  Per <b>Hari</b></h4>
              <canvas id="myChart" style="position: relative; width: 500px height: 500px;"></canvas>
              <hr>


              <br>
              <br>
              <div class="row" >
              <p style="margin-left : 34px"><b>Cari Berdasarkan Tahun :</b>  </p>
              </div>

            <form  method="post">


              <div class="row" style="margin-left : 14px">
                <div class="col-md-2 ">
                <input type="text" autocomplete='off' class="form-control" name="tahun" placeholder="Tahun">
                </div>
               
                <div class="col-md-2 ">
               <button type="submit"   class="btn btn-success btn-sm" name="filter1" value="Submit"><i class="fa fa-search" aria-hidden="true"></i> Submit </button>
                </div>
                </div>
                </form>
              <h4 class="text-center">Grafik Data Man Power Productivity/SC  Per <b>Tahun</b></h4>
              <canvas id="myChart2" style="position: relative; width: 500px height: 500px;"></canvas>

              <br/>
              <br/>
              <br/>

          </div>

        </div>

      </section>
      <!-- /.Left col -->


      <section class="col-lg-4">


       

      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->









  </section>

</div>

















<?php include 'mppsc.php'; ?>