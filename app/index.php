<?php 
  include ("../php/datos.php");
 ?>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d1c9394cbe.js" crossorigin="anonymous"></script>
  <title>Inicio de sesión - <?php echo $app; ?></title>
</head>
<body>
  <br><br><br><br><br>
  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-6 mx-auto mt-2">
    <div class="alert alert-danger text-uppercase"><b>Sistema de prueba, puede ingresar sin sus credenciales</b></div>
    <div class="card my-5">
      <div class="card-body">
          <h2 class="text-center"><?php echo $app; ?></h2>
          <center><span class="text-muted h6">Inicio de sesión</span></center>
          <br>
          <form>
          <div class="form-label-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="Correo electrónico / Usuario" required autofocus>
            <label for="inputEmail">Correo electrónico / Usuario</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            <label for="inputPassword">Contraseña</label>
          </div>

          <a href="login/usuario/inicio.php" class="btn btn-lg btn-primary btn-block text-uppercase" id="ingresara"><i class="fa fa-sign-in"></i> Iniciar sesión</a>
          </form>
          <hr class="my-4">

          <div class="text-center">
            <a class="small" href="#" data-toggle="modal" data-target="#olvidoclave">¿Olvidaste tu contraseña?</a>
            <a class="small" href="../index.php">Volver al sitio principal</a>
          </div>

          <!-- Olvido de clave -->
          <div class="modal fade" id="olvidoclave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Olvidaste tu contraseña?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-envelope"></i>
                        </div>
                      </div>
                      <input id="mail_da" placeholder="Correo Electrónico" type="email" required="required" class="form-control" aria-describedby="mailHelpBlock">
                    </div>
                    <span class="form-text text-muted">Te enviaremos un correo electrónico para que generes la nueva contraseña.</span>
                  </div>
                  <button type="button" id="sendmailda" class="btn btn-block btn-primary btn-block text-uppercase rounded-0" name="button">Recuperar contraseña</button>
                </form>
              </div>
            </div>
          </div>
                </div>
    </div>
  </div>
</div>
</div>
<div id="nots"></div>
<footer class="footer">
  <div class="container-fluid">
    <span class="text-muted"><?php echo $app; ?> | NASA Space Apps Challenge 2020 </span>
    <span class="text-muted float-right">Versión <?php echo $version; ?> | <a href="https://github.com/C-CO2-APP/Web/commits/main" target="a_blank">Control de actualizaciones</a> </span>
</footer>
<!-- JS, Popper.js, and jQuery -->
<script src="https://brann.ar/bino/vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
      $('#ingresara').click(function() {
      $.ajax({
        type: 'POST',
        url: 'acceso/ingresar',
        data: {string1:$('#inputEmail').val(), string2:$('#inputPassword').val()},
        success: function(data) {
          $('#nots').html(data);
        }
      });
    });
    $('#sendmailda').click(function() {
      $.ajax({
        type: 'POST',
        url: 'acceso/resetpass',
        data: {string1:$('#mail_da').val()},
        success: function(data) {
          $('#nots').html(data);
        }
      });
    });
    </script>
</body>
</html>

<!-- Olvido de clave -->
<style type="text/css" media="screen">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px; /* Margin bottom by footer height */
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}


body {
  background: #1d98e2;
  font-family: 'Roboto', sans-serif;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}


/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
