<?php 
include("../php/datos.php");
$pagina = "Paises";
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

		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs bg-dark">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center mt-3">
					<h1 class="text-white">Paises registrados</h1>
				</div>

			</div>
		</section><!-- End Breadcrumbs -->

		<div class="container">
				<section id="featured-services" class="featured-services">
					<div class="container aos-init aos-animate" data-aos="fade-up">

						<div class="row">
							<div class="col-md-12">
								<div class="input-group input-group-lg">
					                <div class="input-group-prepend">
					                  <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search"></i></span>
					                </div>
					                <input type="text" class="form-control" id="yobusco"  aria-describedby="inputGroup-sizing-lg" placeholder="Buscar">
					             </div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-ar fa-3x"></span></div>
									<h4 class="title"><a href="#" data-toggle="modal" data-target="#argentina">Argentina</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-uy fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Uruguay</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-mx fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">México</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-es fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">España</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-us fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Estados Unidos</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-ng fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Nigeria</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-it fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Italia</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-fr fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Francia</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-de fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Alemania</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-ca fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Canada</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-pa fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Panama</a></h4>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 text-center mb-lg-0 mt-4 buscar">
								<div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
									<div class="icon"><span class="flag-icon flag-icon-br fa-3x"></span></div>
									<h4 class="title"><a href="#" onclick="Swal.fire('Próximamente','Aún no esta disponible este país','warning');">Brasil</a></h4>
								</div>
							</div>
						</div>
					</div>

				</section>
			</div>


			
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