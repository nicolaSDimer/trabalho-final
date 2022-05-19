<?php require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav_main.php"; ?>

</div>

<h3> Pedido </h3>
<form method="get" action="pedido.php">
    <h4> Itens:</h4>
    <input type="checkbox" name="ingrediente[]" value="Pão com gergelim"/> Pão com gergelim <br>
    <input type="checkbox" name="ingrediente[]" value="Hamburguer"/> Hamburguer  <br>
    <input type="checkbox" name="ingrediente[]" value="Alface"/> Alface  <br>
    <input type="checkbox" name="ingrediente[]" value="Queijo"/> Queijo <br>
    <input type="checkbox" name="ingrediente[]" value="Molho especial"/> Molho especial <br>
    <input type="checkbox" name="ingrediente[]" value="Cebola"/> Cebola <br>
    <input type="checkbox" name="ingrediente[]" value="Picles"/> Picles <br>

    <h4> Quantidade:</h4>
    <input type="number" name="qtde" min="1" value="1" />

    <h4>Pagamento:</h4>
    <input type="radio" name="pgto" value="Dinheiro" checked /> Dinheiro
    <input type="radio" name="pgto" value="Pix" /> Pix
    <input type="radio" name="pgto" value="Cartão" /> Cartão
    
    <h4>Entrega:</h4>
    <select name="entrega" required > 
      <option value="Avorada">Alvorada</option>
      <option value="Gravatai">Gravatai</option>
      <option value="Cachoeirinha">Cachoeirinha</option>
      <option value="Viamão">Viamão</option>
    </select>
    <br><br>
    <input type="submit" value="Enviar pedido" />
    <input type="reset" value="Limpar" />

</form>