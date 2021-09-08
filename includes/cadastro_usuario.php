<?php



  if(isset($_POST["cadastro_usuario"])){
    if($_POST["inputNome"] AND $_POST["inputCpf"] AND $_POST["inputEmail"]
    AND $_POST["inputEndereco"] AND $_POST["inputSenha"] AND $_POST["inputTelefone"] != ""){

      

      $usuarioLogin = SelecionaUmDado("SELECT Email FROM usuario where Email ='".$_POST["inputEmail"]."'");

      if($usuarioLogin["Email"] != $_POST["inputEmail"]){

        $senhaCripto = password_hash($_POST["inputSenha"], PASSWORD_DEFAULT);

        $cadastro = executasql("INSERT INTO usuario(Nome, CPF, Email, Endereco, Senha, Telefone) VALUES
        ('".$_POST["inputNome"]."','".$_POST["inputCpf"]."', '".$_POST["inputEmail"]."', '".$_POST["inputEndereco"]."',
          '".$senhaCripto."', '".$_POST["inputTelefone"]."')");

            ?>
            <script>
                alert("Cadastro efetuado com sucesso");
            </script>
            <?php
            header("Location: ?login");
          }else{
            ?>
            <script>
              alert("Email já cadastrado!");
            </script>
            <?php
          }
        }else{
          ?>
            <script>
              alert("Preencha os dados corretamente.");
            </script>
            <?php
        }
        }


 ?>
 <head>
 	<link rel="stylesheet" href="css/cadastro.css">

  <style type="text/css">
  #div1{
    width:100%;
    height:auto;
    text-align: center;
    margin-bottom: 10px;
    color: Black;
  }
  </style>

 </head>
 <body>
 	<div class="container h-100" style=" display: block; margin-bottom: 150px;">
 		<div class="d-flex justify-content-center h-100">
 			<div class="user_card">
 				<div class="d-flex justify-content-center" style="margin-top:80px;">
 					<div class="brand_logo_container">
 						<img src="/img/logo.png" class="brand_logo" alt="Logo">
 					</div>
 				</div>
        <div id="div1" style="position:relative;">
          <h3>Cadastro de Usuario</h3>
        </div>
        <form method="post">
          <div class="form-row">
            <div class="form-group col-md-8">
              <input maxlength="200" type="text" name="inputNome" class="form-control" id="inputNome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-4">
              <input maxlength="14" type="text" name="inputCpf" onkeydown="javascript: fMasc( this, mCPF );" class="form-control" id="inputCpf" placeholder="CPF" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" maxlength="400" name="inputEndereco" id="inputEndereco" placeholder="Endereço" required>
          </div>
            <div class="form-row">
          <div class="form-group col-md-8">
            <input maxlength="60" type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group col-md-4">
            <input maxlength="14" type="text" class="form-control" name="inputTelefone" onkeydown="javascript: fMasc( this, mTel );" id="inputTelefone" placeholder="Telefone" required>
          </div>
          </div>
            <div class="form-group">
              <input maxlength="200" type="password" class="form-control" name="inputSenha" id="inputSenha" placeholder="Senha" required>
            </div>
          <center><input type="submit" name="cadastro_usuario" class="btn btn-dark" value="Cadastrar" onclick="usuario_cadastro()"></center>
        </form>
        </div>
      </div>
    </div>
</body>
