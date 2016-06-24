<?php

if (!empty($_POST)) {
    if (isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["categoria"])) {
        if ($_POST["nombre"] != "" && $_POST["descripcion"] != "" && $_POST["categoria"] != "") {
            include "conexion.php";

            $sql = "insert into producto(nombre,descripcion,categoria,created_at) value (\"$_POST[nombre]\",\"$_POST[descripcion]\",\"$_POST[categoria]\",NOW())";
            $query = $con->query($sql);
            if ($query != null) {
                print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
            } else {
                print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
            }
        }
    }
}
?>