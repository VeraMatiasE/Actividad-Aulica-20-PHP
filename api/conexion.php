<?php
function conectar()
{
	global $con;
	$username = $_ENV["DB_USER"];
	$password = $_ENV["DB_PASS"];
	$db = $_ENV["DB_NAME"];
	$host = $_ENV["DB_HOST"];

	$con = mysqli_connect($host, $username, $password, $db);
	/* comprobar la conexión */
	if (mysqli_connect_errno()) {
		printf("Falló la conexión: %s\n", mysqli_connect_error());
		exit();
	} else {
		$con->set_charset("utf8");
		$ret = true;
	}

	return $ret;
}
function desconectar()
{
	global $con;
	mysqli_close($con);
}
?>