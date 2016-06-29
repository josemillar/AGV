<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['categoria'];
	$precio = $_POST['precio'];
	
	if($crud->update($id,$nombre,$descripcion,$categoria,$precio))
	{
		$msg = "<div class='alert alert-info'>
				<strong>WOW!</strong>Actualizacion exitosa<a href='index.php'>Inicio</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> ERROR no se pudo actualizar !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>nombre</td>
            <td><input type='text' name='nombre' class='form-control' value="<?php echo $nombre; ?>" required></td>
        </tr>
 
        <tr>
            <td>descripcion</td>
            <td><input type='text' name='descripcion' class='form-control' value="<?php echo $descripcion; ?>" required></td>
        </tr>
 
        <tr>
            <td>categoria</td>
            <td><input type='text' name='categoria' class='form-control' value="<?php echo $categoria; ?>" required></td>
        </tr>
 
        <tr>
            <td>precio</td>
            <td><input type='text' name='precio' class='form-control' value="<?php echo $precio; ?>" required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Actualizar
				</button>
                <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCELAR</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>