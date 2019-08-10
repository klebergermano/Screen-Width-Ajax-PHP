<?php

//Página php que recebe o valor Post JS e é add na página principal caso necessário

if( isset($_POST['screenWidth'])){

 $valor = $_POST['screenWidth'];
 
session_start();


$_SESSION["sWidth"]=$valor;


}



?>