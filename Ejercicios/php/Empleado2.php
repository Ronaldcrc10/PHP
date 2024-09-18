<?php
# Incluye el archivo que contiene la clase
include_once("ClaseEmpleado2.php");

# Recupera los datos enviados por POST desde el formulario
$nombre = $_POST["nombre"];
$horasNormales = $_POST["horasNormales"];
$horasExtrasDiurnas = $_POST["horasExtrasDiurnas"];
$horasExtrasNocturnas = $_POST["horasExtrasNocturnas"];
$valorHoraNormal = $_POST["valorHoraNormal"];

# Crea un objeto de la clase Empleado2
$empleado = new ClaseEmpleado2($nombre, $horasNormales, $horasExtrasDiurnas, $horasExtrasNocturnas, $valorHoraNormal);

# Obtiene los resultados
$resultados = $empleado->getResultados();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultados del Cálculo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="p-5 mb-4 text-bg-dark container-fluid">
        <div class="container">
            <h1 class="display-5 fw-bold">Resultados del Cálculo</h1>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Datos del Empleado
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" disabled="disabled" value='<?php echo htmlspecialchars($resultados['nombre']); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorHorasNormales">Valor a pagar horas normales:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorHorasNormales" name="valorHorasNormales" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorHorasNormales'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorHoraExtraDiurna">Valor de la hora extra diurna:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorHoraExtraDiurna" name="valorHoraExtraDiurna" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorHoraExtraDiurna'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorHoraExtraNocturna">Valor de la hora extra nocturna:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorHoraExtraNocturna" name="valorHoraExtraNocturna" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorHoraExtraNocturna'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorHorasExtrasDiurnas">Valor a pagar horas extras diurnas:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorHorasExtrasDiurnas" name="valorHorasExtrasDiurnas" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorHorasExtrasDiurnas'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorHorasExtrasNocturnas">Valor a pagar horas extras nocturnas:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorHorasExtrasNocturnas" name="valorHorasExtrasNocturnas" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorHorasExtrasNocturnas'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="sueldoBruto">Sueldo del empleado:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sueldoBruto" name="sueldoBruto" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['sueldoBruto'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="descuentoHonorarios">Valor de descuento por honorarios:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descuentoHonorarios" name="descuentoHonorarios" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['descuentoHonorarios'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="valorNeto">Valor neto a pagar:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="valorNeto" name="valorNeto" disabled="disabled" value='<?php echo htmlspecialchars(number_format($resultados['valorNeto'], 2)); ?>' />
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a class="btn btn-success" href="../html/segundo.html" role="button">Calcular Nuevo</a>
                        <a class="btn btn-primary" href="../index.html" role="button">Listado de Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

