<?php
require("bombillar.html");

$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
echo "Hola $usuario";

?>