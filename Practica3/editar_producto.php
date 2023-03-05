<?php
if(isset($_POST['codigo'], $_POST['nombre'], $_POST['Descripcion'], $_POST['categoria'], $_POST['precio'], $_POST['existencias'])){
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $Descripcion = $_POST['Descripcion'];
  $Categoria = $_POST['categoria'];
  $Precio = $_POST['precio'];
  $Existencias = $_POST['existencias'];

  $xml = simplexml_load_file('productos.xml');
  foreach($xml->producto as $produ){
    if($produ->codigo == $codigo){
      $codigo = $_POST['codigo'];
      $produ->nombre = $nombre;
      $produ->descripcion = $Descripcion;
      $produ->categoria = $Categoria;
      $produ->precio = $Precio;
      $produ->existencias = $Existencias;
      break;
    }
  }
  $xml->asXML('productos.xml');
  header("location:index.php");
}
?>
