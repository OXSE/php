<?php

// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "mexicanCodeIsHot";
	
// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
// Selección de la base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

// crear tabla sql
$sql = "CREATE TABLE mexico (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conexion->query($sql) === TRUE) {
    echo "La tabla MyGuests a sido creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conexion->error;
}

$conexion->close();
?>