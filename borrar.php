<?php
session_start();
require_once('conexion.php');
$miPDO=NEW PDO($hostPDO,$usuarioDB,$contraseyaDB);
$shostPDO="mysql:host=$hostDB;dbname$nombreDB,";


$Auto_id=isset($_REQUEST['Auto_id'])?$_REQUEST['Auto_id']:null;
$Auto_departamento=isset($_REQUEST['Auto_departamento'])?$_REQUEST['Auto_departamento']:null;

$miconsulta=$miPDO->prepare("DELETE FROM automovil WHERE Auto_id= '$Auto_id';");

$miconsulta->execute();

header('location:leer.php');
?>