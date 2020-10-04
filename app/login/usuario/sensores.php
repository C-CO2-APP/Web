<?php
/*PARAMETROS GLOBALES*/
include ("../php/datos.php");
/*PARAMETROS PÁGINA*/
$active_sensores = "active";
$titulo = "Sensores";
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
                  <div class="page-header-subtitle">Puedes ver los sensores en operación.</div>
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
                <div class="col-md-4">
                  <div class="card bg-success text-white mb-4">
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="mr-3">
                                  <div class="text-white-75 small">Sensores operativos</div>
                                  <div class="text-lg font-weight-bold">1</div>
                              </div>
                              <i class="fa fa-microchip fa-2x text-white-50"></i>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Sensores sin conexión</div>
                                    <div class="text-lg font-weight-bold">0</div>
                                </div>
                                <i class="fa fa-microchip fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Sensores dañados</div>
                                    <div class="text-lg font-weight-bold">0</div>
                                </div>
                                <i class="fa fa-microchip fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table id="productos" class="table table-striped table-bordered mt-2" style="width:100%">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Sensor</th>
                            <th>Coordenadas</th>
                            <th>Operativo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>0455554</td>
                            <td>CO2 MG811</td>
                            <td>Latitud: -31.425193 | Longitud: -64.18381</td>
                            <td class="text-success"><b>OPERATIVO</b></td>
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
