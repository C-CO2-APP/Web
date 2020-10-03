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

		<section class="breadcrumbs bg-primary">
	      <div class="container">

	        <div class="d-flex justify-content-between align-items-center">
	          <h1 class="text-white mt-4"><?php echo $pagina; ?> | <?php echo $pais; ?></h1>
	        </div>

	      </div>
	    </section>
			
	</main><!-- End #main -->

	<!-- PAISES CON CIUDADES -->
	<!-- Modal -->
	<div class="modal fade" id="argentina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Argentina</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
        	<div class="row">
        		<div class="col-md-4">
        			<div class="card">
					  <img src="https://i.imgur.com/Uv9CixP.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <center>
					    	<h4 class="card-title">Ciudad de Córdoba</h4>
					    	<a href="paises/ar/cordoba.php" class="btn btn-dark btn-block border-0 text-uppercase font-weight-bold">Ver información</a>
					    </center>
					  </div>
					</div>
        		</div>
        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php include("../php/footer.php"); ?>
</body>
</html>