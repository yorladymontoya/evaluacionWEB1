<?php

$numeroHoras=$_POST['num_horas'];
$nombre=$_POST['nombre'];
$totalNomina=$_POST['val_total'];

if ($nombre == '' && $numeroHoras == ''){
    echo('Debe ingresar y nombre y la cantidad de horas:');
}

if ($numeroHoras <= 40) {
    $totalNomina=$numeroHoras*20000;
} else {
    $hrasExtras=($numeroHoras-40)*25000;
    $valbasico=40*20000;
    $totalNomina=$valbasico+$hrasExtras;
    }

echo(' El valor a pagar a : ' .$nombre. ' Es la suma semanal de: $ ' .$totalNomina);

?>