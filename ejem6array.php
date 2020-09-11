<?php
$n=$_POST['n'];




$array = array($n);
$i=0;

    foreach ($array as &$i) {
    $i = ++$i + 2;
    print_r($array);
}


?>