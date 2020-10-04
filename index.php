<?php 
	include("php/datos.php");
	$pagina = "Inicio";
	$active_inicio = "active2";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("php/head.php"); ?>
</head>
<body>
	<?php include("php/top.php"); ?>
	<?php include("php/nav.php"); ?>

	<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center bg-dark text-white">
      <div class="container" data-aos="zoom-out" data-aos-delay="1000">
      	<br><br>
        <img src="https://i.imgur.com/oOxgnut.png" style="width:100%;">
        <h4 class="mt-3 text-center">Control y monitoreo de CO2</h4>
      </div>
    </section>
	<!-- End Hero -->

	<main id="main">

		<section id="about" class="about section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre CO2</h2>
          <h3>¿Que es el <span>CO2?</span></h3>
          <p>El dióxido de carbono o anhídrido carbónico (CO2) en la atmósfera de la Tierra es un gas traza y colabora a mantener las temperaturas adecuadas para la vida en el planeta.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
            <img src="https://i.imgur.com/qLvvYZX.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <h3>Algunos puntos para aclarar</h3>
            <p class="font-italic">
              ¿Cuales son las consecuencias? ¿Por qué es malo el exceso de CO2? ¿Como se mide?
            </p>
            <ul>
              <li>
                <i class="fa fa-temperature-high"></i>
                <div>
                  <h5>¿Cuales son las consecuencias?</h5>
                  <p>Provoca el efecto invernadero, elevación de temperaturas y perdida del equilibrio de los climas estacionarios.</p>
                </div>
              </li>
              <li>
                <i class="fa fa-sort-amount-up"></i>
                <div>
                  <h5>¿Por qué es malo el exceso?</h5>
                  <p>Puede provocar enfermedades respiratorias en las personas, además de consecuencias en el medio ambiente.</p>
                </div>
              </li>
            </ul>
            <p>
              Partes por millón (ppm) es una unidad de medida con la que se mide la concentración. Determina un rango de tolerancia. Se refiere a la cantidad de unidades de una determinada sustancia (agente, etc.) que hay por cada millón de unidades del conjunto
            </p>
          </div>
        </div>

      </div>
    </section>
    <section id="services" class="services">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>¿Por qué es importante?</h2>
          <h3>¿Por qué necesitamos tomar <span>conciencia?</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <p class="text-right">
              Es importante para verificar de acuerdo a las cantidades de CO2 se produce, reducir todo procesos de combustión como el uso del automóvil, evitar los gastos eléctricos innecesarios como el aire acondicionado y la calefacción que son los responsables de buenas partes del CO2. La lucha contra la deforestación de los árboles, ya que cada árbol que se tala, es dióxido de carbono que queda en la atmosfera. 
              <br>
              Reducir las emisiones de CO2 es fundamental para lograr que la temperatura media de la atmósfera no aumente más de dos grados antes de fin de siglo. La disponibilidad de agua en el planeta depende en gran medida de que lo logremos, ya que el calentamiento global, causado por el efecto invernadero, incrementa las sequías en las zonas más vulnerables y las lluvias torrenciales que erosionan el suelo. 
            </p>
          </div>
          <div class="col-lg-6 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
            <img src="https://i.imgur.com/vxjWB2X.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>

	</main>

	<?php include("php/footer.php"); ?>
</body>
</html>