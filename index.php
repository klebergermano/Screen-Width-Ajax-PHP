
<!DOCTYPE html>
<head>
<title>Ajax e Variavel PHP</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(window).ready(function(){

var screenWidth = $(window).width();

		

   $.ajax({
   method: "POST",
   url: "script.php",
   data: { screenWidth: screenWidth }
})
  .done(function( data ){
     
      // $("#conteudo").append(data); //caso queira adicionar algum arquivo tratado direto ta página script.php
       
});

});


</script>

</head>
<body>
	
<div id='conteudo'></div><!--conteúdo que vira da página script.php-->


<?php 
//Incia a Sessão PHP
session_start();

//Transfere o valor de Session para uma variável
$screenWidth = $_SESSION["sWidth"];

echo "Tamanho da janela do navegador: <b>".$screenWidth.'</b>px'

?>

</body>

</html>
