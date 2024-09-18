<?php

include_once("ClaseEmpleado.php");

$nombre = $_POST["nombre"];
$salario = $_POST["salario"];

$unEmpleado = new Empleado($nombre, $salario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Primer Ejercicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="p-5 mb-4 text-bg-dark container-fluid">
        <div class="container">
            <h1 class="display-5 fw-bold">Calcular Distribución de Pensión</h1>
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
                        <input type="text" class="form-control" id="nombre" name="nombre" disabled="disabled" value='<?php echo $unEmpleado->getNombre(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="salario">Salario:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="salario" name="salario" disabled="disabled" value='<?php echo $unEmpleado->getSalarioBase(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="salarioPension">Cotización Total (15%):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="salarioPension" name="salarioPension" disabled="disabled" value='<?php echo $unEmpleado->calcularCotizacionTotal(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ahorroPensional">Ahorro Pensional (10.5%):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ahorroPensional" name="ahorroPensional" disabled="disabled" value='<?php echo $unEmpleado->calcularAhorroPensional(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="seguroInvalidez">Seguro de Invalidez (1.6%):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="seguroInvalidez" name="seguroInvalidez" disabled="disabled" value='<?php echo $unEmpleado->calcularSeguroInvalidez(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comisionAdministracion">Comisión Administración (1.4%):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="comisionAdministracion" name="comisionAdministracion" disabled="disabled" value='<?php echo $unEmpleado->calcularComisionAdministracion(); ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="garantiaPension">Garantía Pensión Mínima (1.5%): </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="garantiaPension" name="garantiaPension" disabled="disabled" value='<?php echo $unEmpleado->calcularGarantiaPensionMinima(); ?>' />
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a class="btn btn-success" href="../html/primero.html" role="button">Calcular Nuevo</a>
                        <a class="btn btn-primary" href="../index.html" role="button">Listado de Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
