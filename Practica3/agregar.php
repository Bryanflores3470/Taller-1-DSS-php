<?php
extract($_POST);
if(isset($_FILES['image'])){
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
}
    //abrir el archivox xml
    $productos=simplexml_load_file('productos.xml');

    //referencia al archivo
    $producto=$productos->addChild('producto');

    // Mueve la imagen a la ubicación deseada
    move_uploaded_file($image_tmp,"img/".$image_name);

    // Crea un nuevo elemento XML para la imagen
    $producto ->addChild('codigo', $codigo);
    $producto ->addChild('nombre', $nombre);
    $producto ->addChild('descripcion', $descripcion);
    $producto->addChild("img",$image_name);
    $producto ->addChild('categoria', $categoria);
    $producto ->addChild('precio', $precio);
    $producto ->addChild('existencias', $existencias);
    file_put_contents("productos.xml", $productos->asXML());

    header('location:index.php');

?>