<?php

require 'conexion.php';

function GuardarFormularioAlumno($nombre, $apellido, $rut)
{
    $sql = "INSERT INTO alumno(nombre, apellido, rut) VALUES(?,?,?)";
    $smt = $conn->prepare($sql);
    $smt->bindParam(1, $nombre);
    $smt->bindParam(2, $apellido);
    $smt->bindParam(3, $rut);
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

require 'conexion.php';

function GuardarFormularioRamo($ramo, $nota)
{
    $sql = "INSERT INTO ramo(ramo, nota) VALUES(?,?,?)";
    $smt = $conn->prepare($sql);
    $smt->bindParam(1, $ramo);
    $smt->bindParam(2, $nota);
    $smt->execute();
    $resultado = $smt->fetchALL();
    $conn = null;
    return $resultado;
}

if (issset($_REQUEST['ramo_formulario'])){
	$ramo = $_REQUEST['ramo'];
    $nota = $_REQUEST['nota'];

    guardarFormularioRamo($ramo, $nota);
}

?>