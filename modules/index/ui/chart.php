
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Grafik Absensi Pegawai
        </div>
               
        <div class="card-body">

<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}               
</style>

<!-- chart libraries -->
<script type="text/javascript" src="../tools/amc/amcharts/amcharts.js"></script>
<script type="text/javascript" src="../tools/amc/amcharts/serial.js"></script>
<script src="../tools/amc/amcharts/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="../tools/amc/amcharts/plugins/export/export.css" type="text/css" media="all" />
<script src="../tools/amc/amcharts/themes/light.js"></script>
<!-- include dataloader -->
<script type="text/javascript" src="../tools/amc/amcharts/plugins/dataloader/dataloader.min.js"></script>

<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
<!-- amCharts javascript code -->
    <script type="text/javascript">
      AmCharts.makeChart("chartdiv",
        {
          "type": "serial",
          "categoryField": "date",
          "startDuration": 1,
          "categoryAxis": {
            "gridPosition": "start"
          },
          "trendLines": [],
          "graphs": [
            {
              "balloonText": "[[value]] Pegawai",
              "bullet": "square",
              "id": "tepat",
              "title": "Tepat",
              "valueField": "tepat"
            },
            {
              "balloonText": "[[value]] Pegawai",
              "bullet": "square",
              "id": "terlambat",
              "title": "Terlambat",
              "valueField": "terlambat"
            },
            {
              "balloonText": "[[value]] Pegawai",
              "bullet": "square",
              "id": "jamkurang",
              "title": "Jam Kurang",
              "valueField": "jamkurang"
            },
            {
              "balloonText": "[[value]] Pegawai",
              "bullet": "square",
              "id": "tidakmasuk",
              "title": "Tidak Masuk",
              "valueField": "tidakmasuk"
            }
          ],
          "guides": [],
          "valueAxes": [
            {
              "id": "titlesamping",
              "title": "Jumlah Pegawai"
            }
          ],
          "allLabels": [],
          "balloon": {},
          "legend": {
            "enabled": true,
            "useGraphSettings": true
          },
          "dataLoader": {
              "url": "index/ui/data.php"
          },
        }
      );
    </script>

  </div>
</div>