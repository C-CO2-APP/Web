<?php
/*PARAMETROS GLOBALES*/
include ("../php/datos.php");
/*PARAMETROS PÁGINA*/
$active_inicio = "active";
$titulo = "Salite OCO-2";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include ("../php/head.php"); ?>
</head>
<body class="nav-fixed">
  <?php include ("../php/header.php"); ?>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php include ("../php/nav.php"); ?>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
          <div class="container">
            <div class="page-header-content pt-4">
              <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                  <h1 class="page-header-title">
                    <?php echo $titulo; ?>
                  </h1>
                  <div class="page-header-subtitle">Puedes ver el estado del satelite y su información.</div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
          <div class="card">
            <div class="card-body">

              <img src="https://i.imgur.com/Z76ypu4.png" style="width: 100%;">

              <br><br>

              <h1>Orbiting Carbon Observatory-2</h1>
              <h4><b>Estado: <span class="text-success">OPERATIVO</span></b></h4>
              <h4><b>Visualización:</b> Último dato: 30 de agosto 2020</h4>
              <iframe src="https://worldview.earthdata.nasa.gov/?v=-109.50035018676627,-57.65069703842048,-7.493946771611547,-7.869447038420496&t=2020-08-30-T02%3A00%3A00Z&l=OCO-2_Carbon_Dioxide_Total_Column_Average,OCO-2_Carbon_Dioxide_Global_Mean_Difference,Reference_Labels(hidden),Reference_Features(hidden),Coastlines,VIIRS_NOAA20_CorrectedReflectance_TrueColor(hidden),VIIRS_SNPP_CorrectedReflectance_TrueColor(hidden),MODIS_Aqua_CorrectedReflectance_TrueColor(hidden),MODIS_Terra_CorrectedReflectance_TrueColor" style="width: 100%; height: 1000px;"></iframe>
            </div>
          </main>
          <?php include ("../php/footer.php"); ?>
        </div>
      </div>
    </body>
    </html>
    <script type="text/javascript">
    // Datatables
    $('#productos').dataTable( {
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'csv', 'excel', 'pdf', 'print'
      ]
    } );
    </script>
    <style type="text/css">
      .dt-buttons {
        margin-bottom: -25px;
      }
    </style>
