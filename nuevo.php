<?php

if (isset($_POST['submit'])) {
    
    $Auto_id = isset($_REQUEST['Auto_id']) ? $_REQUEST['Auto_id'] : null;
    $Auto_name = isset($_REQUEST['Auto_name']) ? $_REQUEST['Auto_name'] : null;
    $Auto_modelo = isset($_REQUEST['Auto_modelo']) ? $_REQUEST['Auto_modelo'] : null;
    $Auto_marca = isset($_REQUEST['Auto_marca']) ? $_REQUEST['Auto_marca'] : null;
    $Auto_departamento = isset($_REQUEST['Auto_departamento']) ? $_REQUEST['Auto_departamento'] : null;
    $fechacreate = isset($_REQUEST['fechacreate']) ? $_REQUEST['fechacreate'] : null;
    $fechaUpdate = isset($_REQUEST['fechaUpdate']) ? $_REQUEST['fechaUpdate'] : null;
    echo $_POST['Auto_departamento'];
    
    require_once('conexion.php');
    $miPDO = new PDO($hostPDO, $usuarioDB, $contraseyaDB);

    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    
    $miInsert = "INSERT INTO automovil (Auto_id,Auto_name,Auto_modelo,Auto_marca,Auto_departamento,fechacreate,fechaUpdate)VALUES(?,?,?,?,?,?,?)";
    $stmt= $miPDO->prepare($miInsert);
    
    $stmt->execute([$Auto_id,$Auto_name, $Auto_modelo,$Auto_marca,$Auto_departamento,$fechacreate,$fechaUpdate]);
    
}
?>
<style>
    body {
        height: 665px;
        background-image: url("img/imagn.png");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: italic;
    }
</style>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="sstiles.css" type="text/css" media="all">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Registre su Nuevo Auto_id</title>
</head>

<body>
    <h1>Registro Nuevo Automovil</h1>
    <form action="nuevo.php" method="POST">
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <P><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>
                <label class="let" for="Auto_id" class="bi bi-people-fill">Auto_id</label>
                <input id="Auto_id" type="number" name="Auto_id">
            </p>
            <p>
                <label class="let" for="Auto_name">Auto_name</label>
                <input id="Auto_name" type="text" name="Auto_name">
            </p>
            <p>
                <label class="let" for="Auto_modelo">Auto_modelo</label>
                <input id="Auto_modelo" type="text" name="Auto_modelo">
            </p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
                <label class="let" class="bi bi-envelope-fill" for="Auto_marca">Auto_marca</label>
                <input id="Auto_marca" type="text" name="Auto_marca">
            </p>
            <p>
                <label class="let" for="Auto_departamento">Auto_departamento</label>
                <input id="Auto_departamento" type="number" name="Auto_departamento">
            </p>
            <p>
                <label class="let" for="fechacreate">fechacreate</label>
                <input id="fechacreate" type="date" name="fechacreate">

            </p>
            <p>

                <label class="let" for="fechaUpdate">fechaUpdate</label>
                <input id="fechaUpdate" type="date" name="fechaUpdate">


            </p>
            <p>

                <input type="submit" name="submit" class="btn btn-success" value="Guardar">
        </center>
        </p>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</html>