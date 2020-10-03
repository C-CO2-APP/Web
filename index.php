<?php 
include ("php/datos.php");
/*Parametros de la página*/
$pagina = "Inicio";
$active = "active";
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("php/head.php"); ?>
</head>
<body>
	<div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
				<?php include("php/nav.php"); ?>
				<header class="page-header page-header-dark bg-img-cover overlay overlay-40" style='background-image: url("https://i.imgur.com/BYJjyGY.jpg")'>
                    <div class="page-header-content py-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 text-center">
                                    <div data-aos="fade-up">
                                        <img src="https://i.imgur.com/6sdPqNj.png" style="width: 109%;">
                                        <p class="page-header-text">Generando conciencia.</p>
                                    </div>
                                    <button class="btn btn-marketing rounded-pill btn-primary" data-aos="fade-up" data-aos-delay="100">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                    </div>
                </header>
                <div class="container mt-10">
                	<div class="row text-center">
	                    <div class="col-lg-4 mb-5 mb-lg-0">
	                        <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg></div>
	                        <h2>Design</h2>
	                        <p class="mb-0">We start by creating a set of brand guidelines and standards</p>
	                    </div>
	                    <div class="col-lg-4 mb-5 mb-lg-0">
	                        <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div>
	                        <h2>Develop</h2>
	                        <p class="mb-0">Our award winning development team creates personalized digital experiences</p>
	                    </div>
	                    <div class="col-lg-4">
	                        <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
	                        <h2>Deliver</h2>
	                        <p class="mb-0">Our products are created on time, and to your exact specifications</p>
	                    </div>
	                </div>
                </div>
			</main>
		</div>
	</div>

	<footer>
		<?php include("php/footer.php"); ?>
	</footer>
</body>
</html>