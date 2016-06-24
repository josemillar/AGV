<?php
require_once 'conexion.php';
	$result;
 
	$conn = dbConnect();
	$sql = 'SELECT * FROM producto';
	$result = $conn->query($sql);		
	$rows = $result->fetchAll();
	echo <<< HTML
	<h3>Tabla de productos</h3>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>descripcion</th>
				<th>categoria</th>
				<th>precio</th>
			</tr>
		</thead>
		<tbody>
HTML;
		foreach ($rows as $row) {
			echo <<< HTML
			<tr>
				<td>$row[idproducto]</td>
				<td>$row[nombre]</td>
				<td>$row[descripcion]</td>
				<td>$row[categoria]</td>
				<td>$row[precio]</td>
			</tr>
 
HTML;
		}
		echo '</tbody>';
	echo '</table>';
 
 ?>
