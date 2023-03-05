<?php
// Obtener el código del producto de la URL
if(isset($_GET['codigo'])){
    $codigo=$_GET['codigo'];
}else{
    header("Location:index.php");
}

// Cargar los datos del producto desde el archivo XML
$productos=simplexml_load_file("../productos.xml");

$producto_seleccionado = null;
foreach($productos->producto as $produ){
    if($produ->codigo == $codigo){
        $producto_seleccionado = $produ;
        break;
    }
}
if(!$producto_seleccionado){
    header("Location:index.php");
}
?>