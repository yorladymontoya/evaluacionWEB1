
    <?php  

    if (isset($_POST['btnregistrar']) && $_POST['btnregistrar'] !="") {

        $nombres=$_POST['nombre'];
        $telefonos=$_POST['telefono'];
        $direcciones=$_POST['direccion'];
        $sumatoriaSalarios=$_POST['salario'];
        $btnregis=$_POST["btnregistrar"];
        
        $array_resumen= array_merge($nombres,$telefonos,$direcciones);
        
        foreach ($array_resumen as $value) {
             echo($value);
            echo( "</br>");
        }
        echo( "</br>");
        foreach ($sumatoriaSalarios  as $value) {
            echo($value);
          echo( "</br>");
        }
        echo( "</br>");
        echo 'El valor promedio de los Salarios de la sucursal A es: $ ' .array_sum($sumatoriaSalarios);
        echo( "</br>");
        echo( "</br>");
    $sucursalB=40000000;
    $sucursalC=32000000;
             echo "<h3>La sucursal con mejor promedio es: </h3>";
        if (array_sum($sumatoriaSalarios) >= $sucursalB && array_sum($sumatoriaSalarios) >= $sucursalC )
        {
         echo(" La sucursal con mayor promedio de salarios es: <b> LA SUCURSAL A </b> " );
        }
        elseif ($sucursalB >= $sucursalC)
        {
            echo(" La sucursal con mayor promedio de salarios es:<b> LA SUCIRSAL B </b> con $ " .$sucursalB);
        }
        else
        { 
            echo(" La sucursal con mayor promedio de salarios es:<b> LA SUCURSAL C </b> con $" .$sucursalC);
        }
    }
    else{
        echo("Debe diligenciar los campos ");
    }

?>

