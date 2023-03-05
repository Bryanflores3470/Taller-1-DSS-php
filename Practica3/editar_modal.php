<!-- Modal para editar una materia -->
<div class="modal fade" id="editar_<?php echo $produ->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Editar materia</h4>
      </div>
      <div class="modal-body">
        <form action="editar_producto.php" method="post">
          <input type="hidden" name="codigo" value="<?=$produ->codigo?>">

          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?=$produ->nombre?>">
          </div>

          <div class="form-group">
            <label for="Descripcion">Descripcion</label>
            <input type="text" name="Descripcion" class="form-control" value="<?=$produ->descripcion?>">
          </div>

          <div class="form-group">
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" class="form-control" value="<?=$produ->categoria?>">
          </div>

          <div class="form-group">
            <label for="precio">precio</label>
            <input type="text" name="precio" class="form-control" value="<?=$produ->precio?>">
          </div>

          <div class="form-group">
            <label for="existencias">existencias</label>
            <input type="text" name="existencias" class="form-control" value="<?=$produ->existencias?>">
          </div>
          
          <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
			</form>
        </div>
    </div>
  </div>
</div>
