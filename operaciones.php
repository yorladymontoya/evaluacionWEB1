<?php

    function calcular ($num1, $num2, $clic){

        switch ($clic){

            case "suma" :
                    $resultado=($num1+$num2);
                    return $resultado;
                    break;
            case "resta" :
                    $resultado=($num1-$num2);
                    return $resultado;
                    break;
            case "multiplicacion" :
                    $resultado=($num1*$num2);
                    return $resultado;
                    break;
            case "division" :
                $resultado=($num1 / $num2);
                return $resultado;
                break;
        }
     
    }

    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $clic=$_POST['clic'];
    $resultado=calcular($num1,$num2,$clic);

   if ($num1 !="" && $num2 !="") 
    {
       echo('La ' .$clic. ' de los numeros es: ' .$resultado);
       //echo "<input type='number' name='resultado' value='$resultado' />"; 
    } 
    else 
    {
        echo('Error debe digitar los dos valores');
    }


?>