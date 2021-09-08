<?php
  if(isset($_POST["cadastro_animal"])){

    if($_POST["inputNome"] AND $_POST["inputTipo"] AND $_POST["inputPorte"]
    AND $_POST["inputRaca"] AND $_FILES["inputImagem"] AND $_POST["inputDescricao"] != ""){

      $pasta = "./img/";
      $nomearquivo = $_FILES["inputImagem"]["name"];
      $caminho = $pasta.$nomearquivo;

      if(move_uploaded_file($_FILES['inputImagem']['tmp_name'], $caminho)){
        $cadastro = executasql("INSERT INTO Animal(Nome, Tipo, Porte, Raca, Imagem, Descricao, Disponivel) VALUES
        ('".$_POST["inputNome"]."','".$_POST["inputTipo"]."','".$_POST["inputPorte"]."','".$_POST["inputRaca"]."',
          '".$_FILES["inputImagem"]["name"]."','".$_POST["inputDescricao"]."',1)");
            ?>
            <script>
              alert("Cadastro efetuado com sucesso.");
            </script>
            <?php
      }else {
        ?><script>
          alert("Erro ao cadastrar, tente novamente.");
        </script><?php
      }
    }
  }
 ?>
 <head>
 	<link rel="stylesheet" href="css/cadastro.css">
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
        <form method="post" enctype="multipart/form-data" style="padding-top:50;" class="needs-validation">
          <div class="form-row">
            <div class="form-group col-md-8">
              <input maxlength="200" type="text" name="inputNome" class="form-control" id="inputNome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-4">
              <input maxlength="14" type="text" name="inputTipo" class="form-control" id="inputTipo" placeholder="Tipo de animal" required>
            </div>
          </div>

          <div class="form-row">
            <div class="fom-group col md-6">
              <input type="text" class="form-control" maxlength="400" name="inputPorte" id="inputPorte" placeholder="Porte do animal" required>
            </div>
            <div class="form-group col md-6">
              <input maxlength="60" type="text" class="form-control" name="inputRaca" id="inputRaca" placeholder="Raça" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col md-12">
              <input type="file" class="form-control" name="inputImagem" id="inputImagem" required>
            </div>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" maxlength="400" name="inputDescricao" id="inputDescricao" placeholder="Descrição" required></textarea>
          </div>
        <br>
          <center><input type="submit" name="cadastro_animal" class="btn btn-dark" value="Cadastrar"></center>
        </form>
        </div>
      </div>
    </div>
  </div>
</body>
