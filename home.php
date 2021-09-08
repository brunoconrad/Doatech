
<?php
  session_start();
  if(isset($_SESSION["IdUsuario"])) {

    if($_SESSION["IdUsuario"] != 0){

include("includes/conecta_banco.php");
include("includes/scripts.php");

if(isset($_GET["adotar"])){
    if($_GET["adotar"] != "") {
  Executasql("INSERT INTO adocoes(Data_Adocao, IdUsuario, IdAnimal) VALUES
  (CURRENT_TIMESTAMP,'".$_SESSION["IdUsuario"]."','".$_GET["adotar"]."')");
  ?>
  <script>
    alert("Animal foi Adotado com Sucesso!!!");
    window.location = 'home.php';
  </script>
  <?php
  Executasql("UPDATE animal SET Disponivel = 0 WHERE Disponivel= 1 AND IdAnimal='".$_GET["adotar"]."'");
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
   <body class="d-flex flex-column h-100" style="padding-bottom: 0; padding-top: 30; display: flex;">
     <?php include("includes/menu.php"); ?>
      <main role="main" class="flex-shrink-0">
        <?php if(!$_GET AND !$_POST){
          include("includes/slides.php");
        }
        ?>
      <div class="container marketing">
      <?php  include("includes/todos_includes_pagina_principal.php");  ?>
       </div>

   </main>
  </body>
  <?php include("includes/footer.php"); ?>
</html>

<?php } }
 else{  ?>

  <script>  alert("Precisa fazer o login!"); </script>

  <?php if(!isset($_SESSION["IdUsuario"])){
      header("Location: index.php"); 
 } }?>
