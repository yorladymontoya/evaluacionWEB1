
 
<?php

error_reporting(E_ALL ^ E_NOTICE);

function resulImc ($altura, $peso, $imc){
    $imc= ($peso/($altura*$altura));
    return $imc;
}

$altura=$_POST['altura'];
$peso=$_POST['peso'];
$imc= resulImc ($altura, $peso, $imc);

if($altura == "" && $peso == "")
{
    echo (' <b> Debe ingresar los dos datos para calcular </b>');
}
else
{
    switch ($imc){

        case  $imc<18.5 :
                echo('Su IMC es: ' .$imc. "<br />"); 
                echo('CLASIFICACION ES: <b /> PESO INSUFICIENTE <b/>');
                break;
        case  $imc >= 18.5 and $imc <=   24.9 :  
                echo('Su IMC es: ' .$imc. "<br />");
                echo('CLASIFICACION ES: <b /> NORMOPESO </b>');
                break;
        case  $imc >= 25 and $imc <= 26.9 :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> SOBRE PESO GRADO I </b>');
                break;
        case  $imc >= 27 and $imc <= 29.9 :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> SOBRE PESO GRADO II(Preobesidad) </b>');
                break;
        case  $imc >= 30 and $imc <= 34.9 :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> OBESIDAD DE TIPO I </b>');
                break;
        case  $imc > 35 and $imc < 39.9 :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> OBESIDAD DE TIPO II </b>');
                break;
        case  $imc > 40 and $imc < 49.9 :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> OBESIDAD DE TIPO III (Morbida) </b>');
                break;
        case  $imc > 50  :
                echo('Su IMC es: ' .$imc . "<br />");
                echo('CLASIFICACION ES: <b> OBESIDAD DE TIPO IV (Extrema) </b>');
                break;
    }
}



?>
