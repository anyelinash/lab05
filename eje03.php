<?php
    $numhj = $_POST['nrhj'];
    $importe = floatval($_POST['impor']);
    $bonificacion = 50 * $numhj;
    $sbasico = 600;
    $comision = 0.075 * $importe;
    $sbruto = $sbasico + $comision;
    $descuento = 0.11 * $sbruto;
    $sneto = ($sbruto - $descuento) + $bonificacion;
        
        echo "El numero de hijos es: ".$numhj."<br>"; 
        echo "La bonificacion es: ".$bonificacion."<br>"; 
        echo "El importe del mes es: ".$importe."<br>";
        echo "La comision es: ".number_format($comision,2)."<br>"; 
        echo "Su sueldo bruto es: ".number_format($sbruto,2)."<br>"; 
        echo "El descuento fue de: ".number_format($descuento,2)."<br>"; 
        echo "Su suedo neto es: ".number_format($sneto,2);

?>