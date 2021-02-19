<?php
require_once "Controllers/plantilla.controlador.php";
require_once "Controllers/usuarios.controlador.php";
require_once "Controllers/categorias.controlador.php";
require_once "Controllers/ventas.controlador.php";
require_once "Controllers/productos.controlador.php";
require_once "Controllers/clientes.controlador.php";
require_once "Modelo/usuarios.modelo.php";
require_once "Modelo/categorias.modelo.php";
require_once "Modelo/ventas.modelo.php";
require_once "Modelo/productos.modelo.php";
require_once "Modelo/clientes.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();