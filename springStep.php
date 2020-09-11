<?php


$cantidad_zapatos=$_POST['cantidad_zap'];
$precio_zapatos=120000;
$descuento=0; 
$valor_total=$precio_zapatos*$cantidad_zapatos;

    if ($cantidad_zapatos == 3) {
        $descuento=$valor_total*0.10;
                       
    }else if (($cantidad_zapatos > 3) && ($cantidad_zapatos <= 8)) {
        $descuento=$valor_total*0.20;
        } elseif($cantidad_zapatos > 8){
            $descuento=$valor_total*0.50;
        }
    $total_compra=$valor_total-$descuento;
    echo('El valor del descuento es: $' .$descuento.  '<b> y El valor de la compra es: $ </b>'  .$total_compra);

?>