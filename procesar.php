<?php

require 'conexion.php';

function GuardarFormularioAlumno($nombre, $apellido, $rut)
{
    $sql = "INSERT INTO alumno VALUES(?,?,?)";
    $smt = $conn->prepare($sql);
    $smt->bindParam(1, $nombre);
    $smt->bindParam(1, $apellido);
    $smt->bindParam(1, $rut);
    $smt->execute();
    $resultado = $smt->fetchALL();
    $conn = null;
    return $resultado;
}

if (isset($_REQUEST['alumno_formulario'])){
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$rut = $_REQUEST['rut'];

	guardarFormularioAlumno($nombre, $apellido, $rut);
}

if (issset($_REQUEST['ramo_formulario'])){
	$ramo = $_REQUEST['ramo'];
    $nota = $_REQUEST['nota'];
}

?>