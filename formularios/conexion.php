<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_base");
if (!$conecxion) {
echo 'Error al conectar a la base de datos';
}
else{
echo 'Conectado a la base de datos';
}