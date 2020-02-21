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
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect($dbopts)
    or die('No se ha podido conectar: ' . pg_last_error());

echo "CONNECTAT!";
// Realizando una consulta SQL
//$query = 'SELECT * FROM authors';
//$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

?>

</body>
</html>
