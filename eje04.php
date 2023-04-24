<?php
    $pre = floatval($_POST['precio']);
    $cnt = $_POST['cantidad'];
    $nuprecio = $pre - (0.05 * $pre);
    $icompra = $nuprecio * $cnt;
    $idescuento  = 0.07 * $icompra;
    $ipagar = $icompra - $idescuento;
    $obsequio = 2 * $cnt;
        
        echo "El nuevo precio es: ".number_format($nuprecio,2)."<br>"; 
        echo "El importe por la compra es: ".number_format($icompra,2)."<br>"; 
        echo "El importe del descuento es: ".number_format($idescuento,2)."<br>";
        echo "El importe a pagar es: ".number_format($ipagar,2)."<br>"; 
        echo "Los caramelos obsequiados son: ".$obsequio."<br>";
?>