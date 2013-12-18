<?php

$chocoB = 0;
$chocoE = 0;
$promoB = 0;
$promoE = 0;
$contagem = 0 ;

$chocoB = $_POST["chocoB"];
$chocoE = $_POST["chocoE"];

$contagem = 3 ;
while ($contagem <= $chocoE){
	$promoB = $promoB + 1 ;
	$contagem = $contagem + 3 ;

}

$contagem = 2 ;
while ($contagem <= $chocoB){
	$promoE = $promoE + 1 ;
	$contagem = $contagem + 2 ;

} 	

$contagem = 5  ;
while ($contagem <= $chocoE + $chocoB){
	$promoB = $promoB + 1 ;
	$contagem = $contagem + 5 ;  

}
	echo $chocoE + $promoE ; 
	echo $chocoB + $promoB ;

?>
