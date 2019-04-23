<!DOCTYPE html>
<html>
<head>
	<title>afficher nom</title>
</head>
<body>

<form method="post">
	<input  name="name" placeholder="donnez votre nom"/>
	
	<input  name="firstname" placeholder="donnez votre prenom"/>

	<button type="submit">Ajouter</button>

</form>

<?php 
$data = $_POST;

$name = isset($data['name']) ? $data['name'] : '';
$firstname = isset($data['firstname']) ? $data['firstname'] : '';

if ($name && $firstname){
	echo 'Bonjour ' .$name . ' ' .$firstname ;
}


?>

 
</body>
</html>

