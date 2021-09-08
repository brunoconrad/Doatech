<!DOCTYPE html>
<style>
body {
 background-image: url("img/fundo.jpg");
}

</style>
<html>

<head>
	<link rel="stylesheet" href="css/Login.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100" style="padding-top: 50;">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="/img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<h2 style="color:white;">Faça seu Login</h2>
				<div class="d-flex justify-content-center form_container">
					<form method="post">

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="Email" class="form-control input_user" value="" placeholder="Email" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="Senha" class="form-control input_pass" value="" placeholder="Senha" required>
						</div>
						<br>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input class="btn login_btn" type="submit" name="login" value="Entrar"></input>
				   </div>

					</form>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
