<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>CoronaPaco TEST</h1>
<h2>Are you affected? Test here...</h2>


<form method="post">

	<input type="text" name="usuari">Usuari
	<br>
	<input type="password" name="contrasenya">Contrasenya
	<br>
	<input type="submit">

<?php

$dbopts = getenv('DATABASE_URL');

var_dump($dbopts);

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect($dbopts)
    or die('No se ha podido conectar: ' . pg_last_error());

echo "CONNECTAT!";

if( isset($_POST["usuari"]) ) {
	$usuari = $_POST["usuari"];
	$contrasenya = $_POST["contrasenya"];

	//echo "<p>Usuari:$usuari</p><p>Contrasenya:$contrasenya</p>";

	// Realizando una consulta SQL
	/*$query = 'SELECT * FROM authors WHERE usuari="$usuari" AND contrasenya="$contrasenya"';
	$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	*/
}


?>

</body>
</html>
