<?php
    require_once("Alunno.php");
    $array = [];
    $a = new Alunno("Mario", "Rossi", 18);
    $b = new Alunno("Luca", "Bianchi", 19);
    $c = new Alunno("Giuseppe", "Verdi", 20);
    array_push($array, $a);
    array_push($array, $b);
    array_push($array, $c);
    foreach($array as $alunno){
        echo $alunno->__toString();
    }
?>