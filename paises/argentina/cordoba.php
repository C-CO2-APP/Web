<?php 
include("../php/datos.php");
$pagina = "Ciudad de Córdoba";
$pais = "Argentina";

$active_paises = "active2";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../php/head.php"); ?>
</head>
<body>
	<?php include("../php/top.php"); ?>
	<?php include("../php/nav.php"); ?>

	<main id="main" data-aos="fade-up">

		<section class="breadcrumbs bg-dark d-print-none">
	      <div class="container">

	        <div class="d-flex justify-content-between align-items-center">
	          <h1 class="text-white mt-4"><?php echo $pagina; ?> | <?php echo $pais; ?></h1>
	          <a href="info-cba.pdf" target="a_blank" class="btn btn-success btn-lg mt-4"><i class="fa fa-download"></i> Descargar informe</a>
	        </div>

	      </div>
	    </section>
	    <br>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-12 mt-4">
	    			<div class="card mb-3">
					  <div class="row no-gutters">
					    <div class="col-md-2 bg-warning">
					      <i class="fa fa-warning fa-5x text-white m-5"></i>
					    </div>
					    <div class="col-md-7">
					      <div class="card-body">
					        <h1 class="card-title">370 PPM</h1>
					        <p class="card-text">CO2 Excesivo.</p>
					        <small>El sensor más cercano es el ID: 124214</small>
					        <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i> Actualizado hace 1 minuto.</small></p>
					      </div>
					    </div>
					    <div class="col-md-2">
					    	<br><br><br>
					    	<a href="#" class="btn btn-dark btn-block btn-lg" data-toggle="modal" data-target="#sensores"><i class="fa fa-map-marker-alt"></i> Ver mapa</a>
					    </div>
					  </div>
					</div>
	    		</div>
	    		<div class="col-md-6 mt-4">
	    			<div class="card">
					  <div class="card-header bg-dark text-white">
					    Historico PPM por decada
					  </div>
					  <div class="card-body">
					    <canvas id="decada" style="height:50px;"></canvas>
					  </div>
					</div>
	    		</div>
	    		<div class="col-md-6 mt-4">
	    			<div class="card">
					  <div class="card-header bg-dark text-white">
					    Historico PPM en lo que va del año
					  </div>
					  <div class="card-body">
					    <canvas id="anual" style="height:50px;"></canvas>
					  </div>
					</div>
	    		</div>
	    		<div class="col-md-6 mt-4">
	    			<div class="card">
					  <div class="card-header bg-danger text-white">
					    Efectos adversos en el ambiente
					  </div>
					  <div class="card-body">
					    Aumento de temperatura en estaciones invernales, disminución de temperturas en estaciones estivales.
					  </div>
					</div>
	    		</div>
	    		<div class="col-md-6 mt-4">
	    			<div class="card">
					  <div class="card-header bg-danger text-white">
					    Efectos adversos en nuestro cuerpo
					  </div>
					  <div class="card-body">
					    Alcalosis, Trastornos hormonales, Trastornos de las glándulas suprarrenales.
					  </div>
					</div>
	    		</div>
	    		<div class="col-md-12 mt-4">
	    			<div class="card">
					  <div class="card-header bg-primary text-white">
					    Imagen satelital <a class="text-white" data-fancybox="images" href="https://i.imgur.com/oMRLgIm.png">OCO-2</a> - 30 de Agosto 2020 (Últimos datos)
					  </div>
					  <div class="card-body">
					  	<center>
						  	<a class="d-block mb-4" data-fancybox="images" href="https://i.imgur.com/IlT3ub3.png">
				                <img class="img-fluid" src="https://i.imgur.com/IlT3ub3.png" style="width:40%;">
				            </a>
			       		</center>
					  </div>
					</div>
	    		</div>
	    	</div>
	    </div>
		<br>
	</main><!-- End #main -->

	<!-- Modales -->
	<!-- Mapa sensores -->
	<div class="modal fade" id="sensores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Sensores cercanos a ti</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
        	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MiYNzGvvoCsjCxx_u8L772zpOzrWJK6k" style="width:100%; height: 800px;"></iframe>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>


	<?php include("../php/footer.php"); ?>
	<script type="text/javascript">
	/* GRAFICO DECADA PPM */
	  var densityCanvas = document.getElementById("decada");

	  Chart.defaults.global.defaultFontFamily = "Verdana";
	  Chart.defaults.global.defaultFontSize = 15;
	  Chart.defaults.global.defaultFontColor = "black";

	  var decada = {
	    label: 'PPM',
	    data: [270, 280, 310, 300, 310, 290, 280, 300, 270, 290, 300],
	    backgroundColor: [
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)',
	    'rgba(255, 187, 0,0.6)'
	    ],
	    borderColor: [
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)',
	    'rgba(255, 187, 0,0.9)'
	    ],
	  };

	  var barChart = new Chart(densityCanvas, {
	    type: 'line',
	    color: '#fff',
	    data: {
	      labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"],
	      datasets: [decada],
	    }
	  });
	  /* GRAFICO DECADA PPM */
	  var densityCanvas = document.getElementById("anual");

	  Chart.defaults.global.defaultFontFamily = "Verdana";
	  Chart.defaults.global.defaultFontSize = 15;
	  Chart.defaults.global.defaultFontColor = "black";

	  var anual = {
	    label: 'PPM',
	    data: [270, 280, 310, 300, 310, 290, 280, 300, 270, 290, 300, 260, 300],
	    backgroundColor: [
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)',
	    'rgba(0,102,255,0.6)'
	    ],
	    borderColor: [
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)',
	    'rgba(0,102,255,0.9)'
	    ],
	  };

	  var barChart = new Chart(densityCanvas, {
	    type: 'line',
	    color: '#fff',
	    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
	      datasets: [anual],
	    }
	  });
	</script>
</body>
</html>