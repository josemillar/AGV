<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$fechanacimiento = $_POST['fechanacimiento'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	
	if($crud->update($id,$nombre,$apellido,$direccion,$fechanacimiento,$telefono,$email,$clave))
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
            <td>apellido</td>
            <td><input type='text' name='apellido' class='form-control' value="<?php echo $apellido; ?>" required></td>
        </tr>
 
        <tr>
            <td>direccion</td>
            <td><input type='text' name='direccion' class='form-control' value="<?php echo $direccion; ?>" required></td>
        </tr>
 
        <tr>
            <td>fecha nacimiento</td>
            <td><input type='text' name='fechanacimiento' class='form-control' value="<?php echo $fechanacimiento; ?>" required></td>
        </tr>
		        <tr>
            <td>telefono</td>
            <td><input type='text' name='telefono' class='form-control' value="<?php echo $telefono; ?>" required></td>
        </tr>
		<tr>
            <td>email</td>
            <td><input type='text' name='email' class='form-control' value="<?php echo $email; ?>" required></td>
        </tr>
				<tr>
            <td>clave</td>
            <td><input type='text' name='clave' class='form-control' value="<?php echo $clave; ?>" required></td>
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