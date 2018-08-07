<?php



if(isset($_REQUEST)){

  $env=$_REQUEST['nome'];

// Criando um novo arquivo

file_put_contents("novo.html", $env);}

echo file_get_contents("novo.html");



?>

