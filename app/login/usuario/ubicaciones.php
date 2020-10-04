<?php
/*PARAMETROS GLOBALES*/
include ("../php/datos.php");
/*PARAMETROS PÁGINA*/
$active_ubicaciones = "active";
$titulo = "Ubicaciones";
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
                  <div class="page-header-subtitle">Puedes ver las ubicaciones cargadas con su cantidad de sensores.</div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
          <div class="card">
            <div class="card-body">

              <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table id="productos" class="table table-striped table-bordered mt-2" style="width:100%">
                        <thead>
                          <tr>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Sensores</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Córdoba</td>
                            <td>Argentina</td>
                            <td>15</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>

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
