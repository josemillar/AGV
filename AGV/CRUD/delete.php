<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete.php?deleted");	
}

?>

<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	<strong>Satisfactorio!</strong> Se elimino correctamente... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Atencion!</strong> realmente desea eliminar? 
		</div>
        <?php
	}
	?>	
</div>

<div class="clearfix"></div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>idproducto</th>
         <th>nombre</th>
         <th>descripcion</th>
         <th>categoria</th>
         <th>precio</th>
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM producto WHERE idproducto=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['idproducto']); ?></td>
             <td><?php print($row['nombre']); ?></td>
             <td><?php print($row['descripcion']); ?></td>
             <td><?php print($row['categoria']); ?></td>
         	 <td><?php print($row['precio']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['idproducto']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; SI</button>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Volver</a>
    <?php
}
?>
</p>
</div>	
<?php include_once 'footer.php'; ?>