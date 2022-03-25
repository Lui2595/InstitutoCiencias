<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
  <link rel="shortcut icon" href="img/logo imagen con fondo.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Instituto Ciencias del sector social</title>

	<!-- CSS -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="vendor/fontawesome4.4/styles.css">
	<link rel="stylesheet" href="vendor/linearicons/css/linearicons.css">


</head>
<body>

	<?php include "inc/nav.php"; ?>


			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.7401354888784!2d-106.43175222720558!3d31.668328606639708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75ddcba0dbfcf%3A0x46dcc5012252a543!2sGuadalupe%206658%2C%20Lomas%20del%20Rey%2C%2032651%20Cd%20Ju%C3%A1rez%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1598585679976!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			</<div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
							<br>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Cd. Juaréz, Chihuahua</h5>
									<p> 	Calle Guadalupe, No. Ext 6658, Col. Lomas del Rey, Cd. Juarez, Chihuahua
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>(656) 207 61 61</h5>
									<p>Lunes a Viernes de 9am a 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>icisectorsocial@gmail.com</h5>
									<p>Envianos tus dudas cuando sea!</p>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<br>
							<form class="form-area contact-form text-right" id="myForm" action="inc/mail.php" method="post">
								<div class="row">
									<div class="col-lg-6 form-group">
										<input id="nombre" name="nombre" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

										<input id="mail" name="mail" placeholder="Correo electronico" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input id="asunto" name="asunto" placeholder="Asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea id="mensaje" class="common-textarea form-control" name="mensaje" placeholder="Mensaje.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="btn btn-success" style="float: right;">Enviar Mensaje</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<br>
			<!-- End contact-page Area -->
<?php include "inc/footer.php"; ?>
	<script type="text/javascript">

	$("#myForm").submit(function(event){
		event.preventDefault();
		var nombre=$("#nombre").val();
		var mail=$("#mail").val();
		var asunto=$("#asunto").val();
		var mensaje=$("#mensaje").val();

		$.post("inc/mail.php",{asunto:asunto,nombre:nombre,mail:mail,mensaje:mensaje},).done(function(){
			$('#myForm').trigger("reset");
		});

	});
	$(".alink").mouseenter(function(){
			$(this).css("color","#000000");
		}).mouseleave(function(){
			$(this).css("color","#51b400");
		});

	</script>
</body>
</html>
