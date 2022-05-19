<?php

use Database\Database;
use Model\Pedido;

    require_once "../src/model/Pedido.php";
    $ped = new Pedido();

//Recebendo ingrediente
if( isset($_GET['ingrediente']) ) {
    $ped->itens = $_GET['ingrediente'];
} else {
  $ped->itens = null;
}

//Recebendo qtde
if( isset($_GET['qtde']) ) {
    $ped->quant = $_GET['qtde'];
} else {
    $ped->quant = null;
}

//Recebendo pgto
if( isset($_GET['pgto']) ) {
    $ped->pag = $_GET['pgto'];
} else {
    $ped->pag = null;
}

//Recebendo entrega
if( isset($_GET['entrega']) ) {
    $ped->local = $_GET['entrega'];
} else {
    $ped->local = null;
}

$listaItem = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    
    <h3> Itens: </h3>
    <?php foreach($ped->itens as $item) : ?>
    <!-- Estrutura que se repetirá quantas vezes necessário -->
        <h5 style="color: blue">
         <?php
                echo $item;
                $listaItem .= $item . ', ';        
         ?>
      </h5>
    <?php endforeach ?>

    <h3> Quantidade: </h3>
    <h5 style="color: red"> <?= $ped->quant ?> </h5>

    <h3> Pagamento: </h3>
    <h5 style="color: green"> <?= $ped->pag ?> </h5>

    <h3> Entrega: </h3>
    <h5 style="color: purple"> <?= $ped->local ?> </h5>
    <?php

    /////////////////////////////////////////////////////////////////////////////////
     require_once "../src/model/Database.php";
     $db = new Database();
     $db->insert(
          "INSERT INTO pedidos(data_hora, itens, quant, pag, local)
          VALUES('$ped->dataHora' , '$listaItem' , $ped->quant , '$ped->pag' , '$ped->local'); "
     );
    /////////////////////////////////////////////////////////////////////////////////
    ?>
</body>
</html>