
<?php if(isset($_GET["animal"])){
  $testes = Selecionadiversosdados("SELECT * FROM Animal where IdAnimal =".$_GET["animal"]);
  }
    if(isset($_GET["adotar"])){
        if($_GET["adotar"] != "") {
      Executasql("INSERT INTO Adocoes(Data_Adocao, IdUsuario, IdAnimal) VALUES
      (CURRENT_TIMESTAMP,'".$_SESSION["IdUsuario"]."','".$_GET["adotar"]."')");
      ?>
      <script>
        alert("Animal foi Adotado com Sucesso!!!");
        window.location = 'home.php';
      </script>
    <?php
  }
}
?>
<style type="text/css">
#div1{
  width:100%;
  height:150px;
  border:solid 1px;
  text-align: center;
  border-radius: 5px;
  background-color: #f6f6f6
}
.tabela{
  text-align: center;
  background-color: #f6f6f6;
}
.tabela th{
  border-left: 1px solid #adadad;
  padding: 10px;
}
.tabela td{
  border-left: 1px solid #adadad;
  padding: 10px;
}
#semborda{
  border: 0px;
}


</style>
<?php foreach($testes as $teste){ ?>
    <div class="row">
      <div class="col-md-7 card" >
        <p style="text-align:center; margin-top:10px; font-size:20;"><b>Conheça melhor seu mais novo amigo e companheiro!<br> Ele adoraria ganhar um novo lar!</b></p>
        <br>
        <table style="width: 100%;">
          <thead >
            <tr class="tabela">
              <th id="semborda" scope="col">Nome </th>
              <th scope="col">Porte</th>
              <th scope="col">Raça</th>
              <th scope="col">Tipo</th>
            </tr>
          </thead>
        <tbody>
        <tr class="tabela">
          <td id="semborda"><?php  print($teste["Nome"]); ?></th>
          <td><?php  print($teste["Porte"]); ?></td>
          <td><?php  print($teste["Raca"]); ?></td>
          <td><?php  print($teste["Tipo"]); ?></td>
        </tr>
      </tbody>
      </table>
      <br>
      <br>
      <form>
        <div id="div1">
          <h3>Descrição</h3>
        <div class="form-group row">
          <div class="col-sm-12">
            <div type="text"> <?php  print($teste["Descricao"]); ?></div>
          </div>
        </div>
      </div>
      </form>
      </div>
      <div class="col-md-5" >
        <rect width="100%" fill=""/><img style="object-fit: cover; border-radius: 5px;" width="408" height="408"
        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
        focusable="false" role="img"  src="img/<?php print($teste["Imagem"]); ?>">
      </div>
      <?php
      if(isset($_SESSION["IdUsuario"])) {
        if($_SESSION["IdUsuario"] != 0){
          ?>

      <a type="submit" class="btn btn-dark" href="?adotar=<?php print($teste["IdAnimal"]); ?>">Adotar</a>
    <?php } } ?>
    </div>

    <?php } ?>
