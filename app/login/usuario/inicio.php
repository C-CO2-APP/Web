<?php
/*PARAMETROS GLOBALES*/
include ("../php/datos.php");
/*PARAMETROS PÁGINA*/
$active_inicio = "active";
$titulo = "Inicio";
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
                    Panel General
                  </h1>
                  <div class="page-header-subtitle">Aquí encontrarás toda la información sobre la plataforma C/CO2=APP.</div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
          <div class="row align-items-center">
            <div class="col-xxl-4 col-xl-6 mb-4">
              <!-- Información de la cuenta-->
              <a class="card lift h-100 bg-card" href="satelite.php">
                <div class="card-body d-flex justify-content-center flex-column">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-3">
                      <h5>Información satelital</h5>
                      <div class="text-muted">Puedes ver información sobre el satelite OCO-2.</div>
                    </div>
                    <img class="card-img-top" src="../img/data.svg" alt="..." style="width: 10rem;">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-4 col-xl-6 mb-4">
              <!-- Comprar vehiculos -->
              <a class="card lift h-100 bg-card" href="ubicaciones.php">
                <div class="card-body d-flex justify-content-center flex-column">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-3">
                      <h5>Ciudades y Paises</h5>
                      <div class="text-muted">Cargar y editar ciudades y paises donde están ubicados los sensores.</div>
                    </div>
                    <img class="card-img-top" src="../img/gps.svg" alt="..." style="width: 10rem;">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xxl-4 col-xl-6 mb-4">
              <!-- Comprar ropa -->
              <a class="card lift h-100 bg-card" href="sensores.php">
                <div class="card-body d-flex justify-content-center flex-column">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-3">
                      <h5>Sensores</h5>
                      <div class="text-muted">Puedes ver la información de los sensores cargados.</div>
                    </div>
                    <img class="card-img-top" src="../img/driver.svg" alt="..." style="width: 10rem;">
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </main>
      <?php include ("../php/footer.php"); ?>
    </div>
  </div>
</body>
</html>
