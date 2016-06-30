<?php



if(!isset($_SESSION["cart"])){
	$_SESSION["cart"] = array( array("idproducto"=>$_GET["idproducto"],"q"=>1 ));
}else{
	
	$products = $_SESSION["cart"];
	$news = array();
	$newp = array("product_id"=>$_GET["product_id"],"q"=>1);
		if(!in_array($newp, $producto)){
			array_push($producto, $newp);
		}
		$_SESSION["cart"]=$products;
}



?>