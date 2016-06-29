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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
		</thead>
		<tbody>
HTML;
		foreach ($rows as $row) {
			echo <<< HTML
			<tr>
				<td><img src="./subidas/$row[idproducto].jpg"></td>
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
