<?php
include_once 'dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Agregar</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
	 <table class='table table-bordered table-responsive'>
     <tr>
     <th>idcliente</th>
     <th>nombre</th>
     <th>apellido</th>
     <th>direccion</th>
     <th>fecha nacimiento</th>
	 <th>telefono</th>
	 <th>email</th>
	 <th>clave</th>
     <th colspan="2" align="center">acciones</th>
     </tr>
     <?php
		$query = "SELECT * FROM cliente";       
		$records_per_page=3;
		$newquery = $crud->paging($query,$records_per_page);
		$crud->dataview($newquery);
	 ?>
    <tr>
        <td colspan="7" align="center">
 			<div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
        	</div>
        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>