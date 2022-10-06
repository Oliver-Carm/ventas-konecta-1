
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a href="#addnew" class="btn btn-info" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Agregar producto </h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
                
			<form method="POST" action="nuevo.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion" style="position:relative; top:7px;">Codigo de producto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" id="codigo" class="form-control" name="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label for="descripcion" class="control-label" style="position:relative; top:7px;">Referencia:</label>
					</div>
					<div class="col-sm-10">
						<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precioVenta" style="position:relative; top:7px;">Precio venta:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="precioVenta" required type="number" id="precioVenta">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label for="precioCompra"class="control-label"  style="position:relative; top:7px;">Peso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required type="number" name="precioCompra" id="precioCompra">
					</div>
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencia" style="position:relative; top:7px;">Stock:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required type="number" name="existencia" id="existencia">
					</div>
                </div>   
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" value="Guardar" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
			</form>
            </div>

        </div>
    </div>
</div>
</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo de producto</th>
					<th>Referencia</th>
					<th>Precio de venta</th>
					<th>Peso</th>
					<th>Stock</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->precioVenta ?></td>
					<td><?php echo $producto->precioCompra ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><a class="btn btn-warning" href="<?php echo "viewTemplate.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	

	
