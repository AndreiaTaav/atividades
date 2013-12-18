<?php

$dataAtual = getdate ();
$dataAtual ["hours"];
echo $dataAtual ["hours"] -4 ;
echo ":";

$dataAtual = getdate ();
echo $dataAtual ["minutes"];
echo " " ;

$dataAtual = getdate ();
echo $dataAtual ["mday"];
echo "/";

$dataAtual = getdate ();
echo $dataAtual ["mon"];
echo "/";

$dataAtual = getdate ();
echo $dataAtual ["year"];

$diaSemana = $dataAtual ["wday"] ;
switch ($diaSemana) {
Case 0:
	echo " Domingo" ;
Break ; 
Case 1 :
	echo " Segunda " ;
Break ;
Case 2 :
	echo " Terça" ;
Break ;
Case 3 :
	echo " Quarta" ;
Break ;
Case 4 :
	echo " Quinta" ;
Break ;
Case 5 :
	echo " Sexta" ;
Break ;
Case 6 :
	echo " Sabado" ;
Break ;

}
?>
