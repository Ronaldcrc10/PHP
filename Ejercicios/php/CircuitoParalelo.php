<?php

# Incluye el archivo que contiene la clase
include_once("ClaseCircuito.php");

# Recupera los datos enviados por POST desde el formulario
$voltaje = $_POST["voltaje"];
$resistencias = array($_POST["R1"], $_POST["R2"], $_POST["R3"], $_POST["R4"], $_POST["R5"]);

# Crea un objeto de la clase Circuito
$circuito = new Circuito($voltaje, $resistencias);

# Calcula los resultados
$resistenciaTotal = $circuito->calcularResistenciaTotal();
$corriente = $circuito->calcularCorriente();
$potencia = $circuito->calcularPotencia();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resultados del Circuito</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="p-5 mb-4 text-bg-dark container-fluid">
        <div class="container">
            <h1 class="display-5 fw-bold">Resultados del Circuito en Paralelo</h1>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Resultados
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="resistenciaTotal">Resistencia Total:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="resistenciaTotal" name="resistenciaTotal" disabled="disabled" value='<?php echo $resistenciaTotal; ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="corriente">Corriente (I):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="corriente" name="corriente" disabled="disabled" value='<?php echo $corriente; ?>' />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="potencia">Potencia (P):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="potencia" name="potencia" disabled="disabled" value='<?php echo $potencia; ?>' />
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a class="btn btn-success" href="../html/tercero.html" role="button">Calcular Nuevo</a>
                        <a class="btn btn-primary" href="../index.html" role="button">Listado de Ejercicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
