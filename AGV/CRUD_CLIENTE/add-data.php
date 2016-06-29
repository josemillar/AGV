<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	//$idcliente = $_POST['idcliente'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$fechanacimiento = $_POST['fechanacimiento'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	
	if($crud->create($nombre,$apellido,$direccion,$fechanacimiento,$telefono,$email,$clave))
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
            <td>nombre</td>
            <td><input type='text' name='nombre' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>apellido</td>
            <td><input type='text' name='apellido' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>direccion</td>
            <td><input type='text' name='direccion' class='form-control' required></td>
        </tr>
		<tr>
            <td>fecha nacimiento</td>
            <td><input type='text' name='fechanacimiento' class='form-control' required></td>
        </tr>
		<tr>
            <td>telefono</td>
            <td><input type='text' name='telefono' class='form-control' required></td>
        </tr>
		<tr>
            <td>email</td>
            <td><input type='text' name='email' class='form-control' required></td>
        </tr>
		<tr>
            <td>clave</td>
            <td><input type='text' name='clave' class='form-control' required></td>
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