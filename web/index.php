<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>CoronaPaco TEST</h1>
<h2>Are you affected? Test here...</h2>

<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

echo $dbopts."<br>";

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("postgres://mmtupwnpdhmqnu:6c440c250c6c5c6af8d9e5dfdbf71e490f9ec6f5eb72142532ec3dbd52033b36@ec2-52-86-33-50.compute-1.amazonaws.com:5432/datk8i4decc3lm")
    or die('No se ha podido conectar: ' . pg_last_error());

echo "CONNECTAT!";
// Realizando una consulta SQL
//$query = 'SELECT * FROM authors';
//$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

?>

</body>
</html>
