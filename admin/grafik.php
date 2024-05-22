
<head>

<link rel="stylesheet" href="../sys/bootstrap/plugins/morris/morris.css">
<link rel="stylesheet" href="../sys/bootstrap/ionicons.min.css">
</head>
<?php
$total_query = "SELECT COUNT(*) AS total FROM daftar";
$total_result = mysqli_query($koneksi, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total = $total_row['total'];
$query = "SELECT YEAR(tgl_daftar) AS tahun, COUNT(*) AS jumlah_data
FROM daftar
GROUP BY YEAR(tgl_daftar)";
$result = mysqli_query($koneksi, $query);
?>
<div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Progress Bars Different Sizes</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
           <?php while ($row = mysqli_fetch_assoc($result)) { 
            $persentase = ($row['jumlah_data'] / $total) * 100;?>
              <p>TOTAL PENDAFTAR <?=$row['tahun']?><code>: <?=$row['jumlah_data']?> <?=round($persentase, 2)?> %</code></p>
              <div class="progress active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?=round($persentase, 2)?>%">
                  <span class="sr-only"><?=$row['jumlah_data'] ?> Daftar </span>
                </div>
              </div>
            <?php }?>
       
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col (left) -->
      </div><!-- /.row -->


      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
            <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik data santri</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col (LEFT) -->
        <div class="col-md-6">
   <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik data santri</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col (RIGHT) -->
      </div><!-- /.row -->


<!-- jQuery 2.1.4 -->
<script src="../sys/bootstrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<!-- Morris.js charts -->
<script src="../sys/bootstrap/raphael-min.js"></script>
<script src="../sys/bootstrap/plugins/morris/morris.min.js"></script>
<!-- FastClick -->
<script>
  
  $(function () {
    "use strict";
    //DONUT CHART

    var donutData = <?php // Query SQL dengan JOIN dan GROUP BY
$query = "SELECT YEAR(tgl_daftar) AS tahun, COUNT(*) AS jumlah_data
FROM daftar
GROUP BY YEAR(tgl_daftar)";

$result = mysqli_query($koneksi, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
$data[] = array(
    "label" =>  $row["tahun"],
    "value" => $row["jumlah_data"]
);
}

echo json_encode($data);
?>;

var donut = new Morris.Donut({
element: 'sales-chart',
resize: true,
colors: ["#3c8dbc", "#f56954", "#00a65a"],
data: donutData,
hideHover: 'auto'
});
    //BAR CHART
var barData = <?php
// Query SQL dengan JOIN dan GROUP BY
$query = "SELECT YEAR(tgl_daftar) AS tahun, jenis_kelamin, COUNT(*) AS jumlah_data
      FROM daftar
      GROUP BY YEAR(tgl_daftar), jenis_kelamin";
$result = mysqli_query($koneksi, $query);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
$data[] = array(
    "y" => $row["tahun"],
    "a" => $row["jumlah_data"],
    "b" => $row["jumlah_data"]
);
}

echo json_encode($data);
?>;

var bar = new Morris.Bar({
element: 'bar-chart',
resize: true,
data: barData,
barColors: ['#00a65a', '#f56954'],
xkey: 'y',
ykeys: ['a', 'b'],
labels: ['daftar', 'daftar'],
hideHover: 'auto'
});


 
  
  });
</script>
</body>
</html>
