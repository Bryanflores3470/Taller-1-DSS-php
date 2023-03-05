<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TextilExport</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body id="body">
    <div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index_usuario.php">TextilExport</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../index.php">Admin</a>
        <a class="nav-link" href="index_usuario.php">Usuario</a>
      </div>
    </div>
  </div>
</nav>
</div>

<div class="container">
    <h1 class="page-header text-center">TextilExport</h1>
    <?php include ('formulariofiltar.html');?>
    <div class="row">
    <?php
    $productos=simplexml_load_file("../productos.xml");
    $categoriaSeleccionada = "";
    if(isset($_POST['categoria'])) {
        $categoriaSeleccionada = $_POST['categoria'];
    }
    foreach($productos->producto as $produ){
        if($categoriaSeleccionada == "" || $categoriaSeleccionada == $produ->categoria) {
    ?>
    <div class="col-sm-6 col-md-4 text-center" >
        <div class="card" style="margin-top:20px;" id="targeta">
            <img class="card-img-top" src="../img/<?=$produ->img?>" alt="" id="img">
            <div class="card-body">
                <h2 class="card-title"><?=$produ->nombre?></h2>
                <p class="card-text">Precio: $<?=$produ->precio?></p>
                <p class="card-text">Categoria: <?=$produ->categoria?></p>
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark" onclick="verProducto('<?=$produ->codigo?>')">Ver Producto</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
    </div>
</div>

<script>
function verProducto(codigo) {
    window.location.href = "VerProducto.php?codigo=" + codigo;
}
</script>


</div>
</body>
</html>
