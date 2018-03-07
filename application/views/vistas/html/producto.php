<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url() ?>css/menupi.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?= base_url() ?>css/bootstraperos.css" rel="stylesheet" type="text/css" media="screen">
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/popper.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/producto.js"></script>
    </head>
    <body>
        <?php include("desplegable.php"); ?>
        <center>
            <br>
            <h1 id="titulo">Productos</h1>
            <div id="tabla"></div><br>
            <div id="registro">
                <table>
                    <tr align="center">
                        <th>Nombre</th>
                        <th>Presentaci&oacute;n</th>
                        <th>Unidad</th>
                        <th>Capacidad</th>
                    </tr>
                    <tr align="center">
                        <td><input type="text" id="campo"></td>
                        <td><input type="text" id="campo"></td>
                        <td><input type="text" id="campo"></td>
                        <td><input type="text" id="campo"></td>
                    </tr>
                </table>
            </div>
        </center>
    </body>
</html>