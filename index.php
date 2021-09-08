<?php 

include("includes/conecta_banco.php");
include("includes/scripts.php");


session_start();
if(isset($_POST["login"])){
if($_POST["Email"] != "" AND $_POST["Senha"] != ""){

  $senha = $_POST["Senha"];
  $usuario = selecionaumdado("Select * from usuario where Email='".$_POST["Email"]."'");

  if(password_verify($senha, $usuario["Senha"])){

  if($usuario){
    session_start();
    $_SESSION["IdUsuario"] = $usuario["IdUsuario"];
    $_SESSION["Nome"] = $usuario["Nome"];
    $_SESSION["Email"] = $usuario["Email"];
    header("Location: home.php");
    exit;
  }
}else{
    ?>
    <script>
      alert("Email ou Senha incorreta!");
    </script>
    <?php
    }
  }
}

?>
<style>
body {
 background-image: url("img/fundo.jpg");
}

</style>
<!doctype html>
<html>
  <head>
    <?php include("includes/link_meta.php"); ?>
  </head>
  <body class="d-flex flex-column h-100" style="padding-bottom: 0; padding-top:50px;">
  <?php
  
  if(!isset($_SESSION["IdUsuario"])) {
       include("includes/menu_nao_logado.php"); 
   } 
   else if($_SESSION["IdUsuario"] != 0){
       include("includes/menu.php");
   }
   ?>
<main role="main" class="flex-shrink-0">
<?php if(!$_GET AND !$_POST){
  include("includes/slides.php");
}
  ?>
<div class="container marketing">
<?php include("includes/todos_includes_pagina_principal.php");?>


  </div>
</main>

  </body>
<?php include("includes/footer.php");  ?>

</html>

