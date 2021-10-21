<?php
 ?>
 <?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "Materia.php";
include_once "Nota.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
$materias = Materia::obtener();
$notas = Nota::obtenerDeEstudiante($estudiante->id);
$materiasConCalificacion = Nota::combinar($materias, $notas);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
        body {
            padding-top: 70px;
        }
    </style>
    <title>Control de notas</title>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color: #AED6F1;">
        <a class="navbar-brand" href="mostrar_estudiantes.php"><h1>Notas de <?php echo $estudiante->nombre ?></h1></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                

                
                <li class="nav-item">
                    <img src="user.png" width="50px" alt="">
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <img src="uis.png" width="180px" alt="">
                </li>
            </ul>
        </div>
    </nav>
    <main class="container-fluid">