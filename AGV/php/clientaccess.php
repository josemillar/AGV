<?php


// print_r($_POST);
$users = ClientData::getByEmail($_POST["email"]);
$found = false;
// print_r($user);

foreach ($users as $user) {
	if(crypt($_POST["clave"],$user->clave )==$user->clave){
		$_SESSION["nombre"]=$user->id;
		$found=true;
	}
}

if($found){
	Core::redir("index.php?CRUD_CLIENTE=index.ph");
}else{
	Core::redir("index.php?CRUD_CLIENTE=index.ph");
}

?>

