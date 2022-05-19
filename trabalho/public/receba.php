<?php  
 use Database\Database;

 if( isset($_POST["email"]) ) {
   $email = $_POST["email"];
 } else {
   $email = null;
 }

 if( isset($_POST["pass"]) ) {
  $pass = $_POST["pass"];
} else {
  $pass = null;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db = new Database(); 

$resultDb = $db->select(
  "SELECT * FROM usuarios WHERE email='$email'; "

);
 
if(isset($resultDb[0]) ) {
  $emailDb = $resultDb[0]->email;
  $senhaDb = $resultDb[0]->senha;

} else {
  $emailDb = null;
  $senhaDb = null;
}
//var_dump($resultDb[0]);
////////////////////////////////////////////////////////////////////////////////////////////////////




 

  if($email != null && $pass != null){
    if($email == "a@gmail.com" && $pass == "123") {
     // $redirect = "<meta http-equiv='refresh' content='3; url=https://qi.edu.br'/>";
    } else {
      $msg = "Acesso negado!";
      $redirect = "<meta http-equiv='refresh' content='3; url=../inicial.php'/>";
    }
  }


?>

<?php require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav_main.php"; ?>

<!DOCTYPE html>
<html>
<header>
<meta charset="utf8"/>
<title>Página inicíal</title>

</header>
<body>
    <div style="text-align:  center;">
    <h1> <?php echo isset($msg) ? $msg : "visitante" ?> </h1>
    <?= isset($redirect) ? $redirect : "<hr>"?>
    


</div>

<h3 style="text-align: center" ;> Instituições </h3>
<form method="get" action=" pedido.php ">
<div class="login-center">
    <div class="form group">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sn-12">
                      <br><br><br><br><br><br><br><br><br><br><br>
                      <p style="text-align: center" class="lh-1">descrição das ongs</p>
                      <a href="ajuda.php">
                      <input type="submit" class="btn btn-primary col-sm-12 col-lg-4 offset-lg-2" value="Ajudar" />
                      </a>
                    </div>
                </div>
    </div>

</form>
</div>

</body>
</html>