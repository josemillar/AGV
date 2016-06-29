<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$idproducto = $_POST['idproducto'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['categoria'];
	$precio = $_POST['precio'];
	
	if($crud->create($idproducto,$nombre,$descripcion,$categoria,$precio))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>WOW!</strong>se inserto correctamente<a href="index.php">Inicio</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR al insertar!
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>idproducto</td>
            <td><input type='text' name='idproducto' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>nombre</td>
            <td><input type='text' name='nombre' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>descripcion</td>
            <td><input type='text' name='descripcion' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>categoria</td>
            <td><input type='text' name='categoria' class='form-control' required></td>
        </tr>
		<tr>
            <td>precio</td>
            <td><input type='text' name='precio' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Crear nuevo registro
			</button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Volver</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>