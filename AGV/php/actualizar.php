<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["descripcion"]) &&isset($_POST["categoria"]) ){
		if($_POST["nombre"]!=""&& $_POST["descripcion"]!=""&&$_POST["categoria"]!=""){
			include "conexion.php";
			
			$sql = "update producto set nombre=\"$_POST[nombre]\",descripcion=\"$_POST[descripcion]\",categoria=\"$_POST[categoria]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>