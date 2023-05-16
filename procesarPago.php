<?php
include "config.php";
$total=$_GET["total"];
$cvv=$_GET["cvv"];
if($db->query("INSERT INTO venta (id_usuario,id_tipo_pago,subtotal) VALUES(1,2,$total) ") and $cvv!=000){
    header ('Location:DetalleProducto.php?articulo='.$_GET["articulo"].'&pago=true');
}else{
    header ('Location:DetalleProducto.php?articulo='.$_GET["articulo"].'&pago=false');
}
?>