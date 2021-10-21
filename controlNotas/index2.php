<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiantes = Estudiante::obtener();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>INGRESO AL SISTEMA</title>
</head>
<body>
    <header class="main-header">

            <div class="main-cont">
                <div class="desc-header">
                    <img src="uis.png"  alt="image school">
                    <p>Universidad Industrial de Santander</p>
                </div>
            </div>
            <div class="cont-header">
                <h1>Bienvenido</h1><p></p>
                    <a href="mostrar_estudiantes.php" class="btn btn-warning">
                    <h4>Ingreso Docente</h4>
                    </a><p></p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><h4>Estudiantes</h4></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estudiantes as $estudiante) { ?>
                            <tr>
                                <td>
                                    <?php echo $estudiante["nombre"] ?>
                                    <a href="mostrar_nota_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-success">
                                        ver notas
                                     </a>
                                </td>
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        
    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>