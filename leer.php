<?php
    require_once('conexion.php');
    $miPDO = new PDO($hostPDO,$usuarioDB,$contraseyaDB);
    
    $miConsulta = $miPDO->prepare('SELECT * FROM automovil;');
    
    $miConsulta->execute();

?>
 <!DOCTYPE html>
 <html lang="es">
     <head>
        <title>CRUD PHP</title>
        

        <!--  <style>
            table {
            border-collapse: collapse;
            width: 100%;
             }
            table td {
            border: 1px solid orange;
            text-align: center;
            padding: 1.3rem;
            }
            .button {
            border-radius: .5rem;
            color: white;
            background-color: orange;
            padding: 1rem;
            text-decoration: none;
            }
        </style>  -->
        <meta charset="u.t+63f-8">
        <link rel="stylesheet" href="./css/styles.css" type="text/css" media="all">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <br>
    <div class="flex-container"><h1>Campos de la clase automóvil</h1> </div> 
    <div class="container">
    <p><a botton type="button" class="btn btn-success" href="nuevo.php">Crear</botton></a></p>
    <div class="table-responsive">    
    <table class="table table-hover table-bordered" >
   
            <tr>
                <th>Auto_id </th>
                <th>Auto_name</th>
                <th>Auto_modelo</th>
                <th>Auto_marca</th>
                <th>Auto_departamento</th>
                <th>fechacreate</th>
                <th>fechaUpdate</th>
                
            </tr>
            <?php foreach ($miConsulta as $clave=>$valor):?>
            <tr>
                <td><?= $valor['Auto_id'];?></td>
                <td><?= $valor['Auto_name'];?></td>
                <td><?= $valor['Auto_modelo'];?></td>
                <td><?= $valor['Auto_marca'];?></td>
                <td><?= $valor['Auto_departamento'];?></td>
                <td><?= $valor['fechacreate'];?></td>
                <td><?= $valor['fechaUpdate'];?></td>
                <td><a botton type="button" class="btn btn-warning"  href="modificar.php?Auto_id=<?= $valor['Auto_id']?>">Modificar</botton></a></td>
                <td><a botton type="button" class="btn btn-danger"   href="borrar.php?Auto_id=<?= $valor['Auto_id']?>">Borrar</a></td>
                
               <!-- <td><a botton type="button" class="btn btn-warning" href="nuevo.php"> <img src="./img/modificar.png" width="15" height="15"> Modificar</botton></a></td>
                <td><a botton type="button" class="btn btn-danger" href="nuevo.php"><img src="./img/Borrarr.png" width="15" height="15"> Borrar</botton></a></td> -->
            <?php endforeach; ?>
            </tr>
        </table>
    </body>
</html>