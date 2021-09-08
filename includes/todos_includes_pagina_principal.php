<?php
if(!$_GET AND !$_POST){

    include("includes/principal.php");

}
else if(isset($_GET["login"])){
   if(isset($_SESSION["IdUsuario"]) == 0 || ($_SESSION["IdUsuario"] == "")){
    include("includes/Login.php");
 }
 else{
    header("Location: home.php");
 }
}

else if(isset($_GET["animal"])){
      include("includes/detalhes.php");
  }

else if(isset($_SESSION["IdUsuario"]) != 0){
    if(isset($_GET["cadastro_animal"])){
        include("includes/cadastro_animal.php");
    }
    else if(isset($_GET["cadastro_ong"])){
        include("includes/cadastro_ong.php");
    }
    else if(isset($_GET["doacao"])){
        include("includes/doacao.php");
    }
}
else if(isset($_GET["cadastro_usuario"])){
  if(isset($_SESSION["IdUsuario"]) == 0 || ($_SESSION["IdUsuario"] == "")){
      include("includes/cadastro_usuario.php");
    }
}

if(isset($_GET["sair"])){
    session_destroy();
    header("Location: index.php");
          ?>
            <script>
              alert("Você saiu!");
            </script>
          <?php
    }
?>
