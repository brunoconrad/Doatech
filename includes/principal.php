<?php $animais = selecionadiversosdados("SELECT * FROM animal WHERE Disponivel=1"); ?>

<style type="text/css">

    #div1{
      color: black;
      background-color: 	#D3D3D3;
      text-align: center;
    }
    .img{
      object-fit: cover;
      width:155px;
      height:155px;
      margin: 10px 0 10px 0;
    }
</style>

<div class="row">
    <?php  foreach($animais as $ani){ ?>
        <div class="card" style="width: 318px; height: 342px; margin-right: 30px; margin-left: 30px; margin-bottom: 70px; background-color: #D3D3D3;">
          <center><img class="bd-placeholder-img rounded-circle img"  class="card-img-top" src="img/<?php print($ani["Imagem"]); ?>" alt="Imagem de capa do card"></center>
          <div id="div1">
            <h2><?php print($ani["Nome"]); ?></h2>
            <p>Esse é o <?php print($ani["Nome"]); ?> está disponivel para ser adotado</p>
            <p><a class="btn btn-dark" type="submit" href="?animal=<?php print($ani["IdAnimal"]); ?>">Detalhes</a></p>
          </div>
        </div>
  <?php } ?>
</div>
