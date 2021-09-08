<?php

  if(isset($_POST["cadastro_ong"])){
    if($_POST["inputNome"] AND $_POST["inputCNPJ"] AND $_POST["inputEmail"]
    AND $_POST["inputEndereco"] AND $_POST["inputTelefone"] != ""){

        $cadastro = executasql("INSERT INTO Ong(Nome, CNPJ, Email, Endereco, Telefone) VALUES
        ('".$_POST["inputNome"]."','".$_POST["inputCNPJ"]."', '".$_POST["inputEmail"]."', '".$_POST["inputEndereco"]."', '".$_POST["inputTelefone"]."')");
            ?>
            <script>
                alert("Cadastro efetuado com sucesso");
            </script>
            <?php
        }
      }

 ?>


 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/cadastro.css">
  <script src="js/cnpj1.js" type="text/javascript"></script>
  <script src="js/cnpj2.js" type="text/javascript" /></script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#inputCNPJ").mask("99.999.999/9999-99");
    	});
    </script>

</head>
 <body>
 	<div class="container h-100">
 		<div class="d-flex justify-content-center h-100">
 			<div class="user_card">
 				<div class="d-flex justify-content-center">
 					<div class="brand_logo_container">
 						<img src="/img/logo.png" class="brand_logo" alt="Logo">
 					</div>
 				</div>
        <form method="post">
          <div class="form-row">
            <div class="form-group col-md-8">
              <input maxlength="200" type="text" name="inputNome" class="form-control" id="inputNome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-4">
              <input maxlength="14" type="text" name="inputCNPJ" onkeydown="javascript: fMasc( this, mCNPJ );" class="form-control" id="inputCNPJ" placeholder="CNPJ" required>
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
          <center><input type="submit" name="cadastro_ong" class="btn btn-dark" value="Cadastrar" onclick="cadastro_ong()"></center>
        </form>
        </div>

      </div>
    </div>
  </div>
</body>
