<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Biblioteca G8 | Iniciar sesion</title>
  
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="SistemaBiblioteca/assets/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 
  <link rel="stylesheet" href="SistemaBiblioteca/assets/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="SistemaBiblioteca/assets/plugins/iCheck/square/blue.css">

</head>
<body >

<div class="full-box login-container cover">
     
        
        
          <form action="SistemaBiblioteca/backend/auth/login" method="post" class="logInForm">
          <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
			    <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
			      <div class="form-group label-floating">
               
                  <input type="email" class="form-control" placeholder="Email" name="email" required>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group label-floating">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group text-center">
                  <button type="submit" class="btn btn-info" style="color: #FFF;">Ingresar</button>
            </div>
            
                <?php if ($this->session->flashdata("error")): ?>
                  <div class="alert alert-danger alert-dismissable text-justify">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php echo $this->session->flashdata("error"); ?>
                </div>
                <?php endif;?>

                <div class="text-center">
                      <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>

          </form>

     
      
     
</div>







<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<!--====== Scripts -->
<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
</script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' 
    });
  });
</script>
</body>
</html>
