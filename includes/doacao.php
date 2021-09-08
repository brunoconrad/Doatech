<?php


 $Ongs = selecionadiversosdados("SELECT * FROM Ong");

  if(isset($_POST["submit"])){
    $valores = trim($_POST["valores"]);
    if(($_POST["ong"] != null) and ($valores != null)){
      executasql("INSERT INTO Doacoes(Data_Doacao, Valor, IdUsuario, IdOng) VALUES
      (CURRENT_TIMESTAMP,'".$valores."', '".$_SESSION["IdUsuario"]."', '".$_POST["ong"]."')");
            ?>
            <script>
                alert("Doação realizada com sucesso! Obrigado!");
            </script>
            <?php
      }else{
          ?>
            <script>
                alert("Preencha os campos");
            </script>
            <?php
        }
      }
 ?>
<script>
function validar (validarcampo) {
  var validar = document.getElementById("valor").onclick = function() {
    var radio = document.getElementsByName("valores");
    for (var i = 0; i < radios.length; i++) {
      if (radio[i].checked) {
        console.log("Escolheu: " + radio[i].value);
      }
    }
  }
};
</script>
<style>
label {
    display: block;
    text-transform: uppercase;
    font-size: 11px;
    color: hsla(0, 0, 0, .6);
    margin-bottom: 5px;
    font-weight: bold;
    font-family: Inconsolata;
  }

  input,
  .select {
    width: 100%;
    height: 38px;
    color: hsl(0, 0, 20);
    padding: 10px;
    border-radius: 5px;
    font-size: 15px;
    outline: none!important;
    border: 1px solid hsla(0, 0, 0, 0.3);
    box-shadow: inset 0 1px 4px hsla(0, 0, 0, 0.2);

  }

  .select {
    position: relative;

    &::after {
      content: '';
      border-top: 8px solid #222;
      border-left: 4px solid transparent;
      border-right: 4px solid transparent;
      position: absolute;
      z-index: 2;
      top: 14px;
      right: 10px;
      pointer-events: none;
    }

    select {
      appearance: none;
      position: absolute;
      padding: 0;
      border: none;
      width: 100%;
      outline: none!important;
      top: 6px;
      left: 6px;
      background: none;

      :-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #000;
      }

    }
  }
</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/doacao.css">
<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
 			<div class="user_card">
 				<div class="d-flex justify-content-center">
 					<div class="brand_logo_container">
 						<img src="/img/logo.png" class="brand_logo" alt="Logo">
 					</div>
 				</div>
        <br>
        <form method="post" style="padding-top:50;" class="form" autocomplete="off" novalidate>
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01" style="width:30%;">Selecione a ONG</label>
              <select name="ong" class="form-select" id="inputGroupSelect04" style="width:70%;">
                <optgroup>
                  <option selected></option>
                  <?php  foreach($Ongs as $Ong){ ?>
                    <option value="<?php print($Ong["IdOng"]); ?>"><?php print($Ong["Nome"]); ?></option>
                  <?php } ?>
                </optgroup>
              </select>
            </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="outro_valor">DIGITE UM VALOR</span>
            <input type="number" class="form-control" aria-label="Sizing example input" placeholder="R$" name="valores" aria-describedby="inputGroup-sizing-default">
          </div>

          <br>
          <div class="form-row">
            <div class="form-group col-md-12">
            <center><input type="submit" name="submit" id="valor" value="Doar" onclick="validar" class="btn btn-dark"></center>
            </div>
          </div>   
          </div>      
        </form>
      </div>
    </div>
  </div>

</body>
