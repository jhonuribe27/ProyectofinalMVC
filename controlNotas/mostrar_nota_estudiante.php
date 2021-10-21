<?php
 ?>
<?php
include_once "conexion.php";
include_once "encabezado1.php";
include_once "Estudiante.php";
include_once "Materia.php";
include_once "Nota.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
$materias = Materia::obtener();
$notas = Nota::obtenerDeEstudiante($estudiante->id);
$materiasConCalificacion = Nota::combinar($materias, $notas);
?>
<p></p>
<div class="row">
    <div class="col-12">
    <p></p>
        
    </div>
    <div class="col-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Puntaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sumatoria = 0;
                foreach ($materiasConCalificacion as $materia) {
                    $sumatoria += $materia["puntaje"];
                ?>
                    <tr>
                        <td>
                            <?php echo $materia["nombre"] ?>
                        </td>
                        <td>
                            <form action="modificar_nota.php" method="POST" class="form-inline">
                            <?php echo $materia["puntaje"] ?>
                                
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Promedio</td>
                    <td>
                        <strong>
                            <?php
                            $promedio = $sumatoria / count($materias);
                            echo $promedio;
                            ?>
                        </strong>
                    </td>
                </tr>
            </tfoot>
            
        </table>
        <a href="index2.php" class="btn btn-warning">
                    <h4>Volver a inicio</h4>
                    </a>
    </div>
</div>
<?php