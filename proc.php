<?php

    $operacion = $_POST['lista'];

    switch($operacion)
    {
    
        case sumar:
        echo $_POST['c1'] + $_POST ['c2'];
        break;
    }
?>