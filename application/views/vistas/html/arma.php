<!DOCTYPE html>
<html lang="es">
    <head>
        <title>SAA | Armas</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url() ?>css/menu.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?= base_url() ?>css/bootstraperos.css" rel="stylesheet" type="text/css" media="screen">
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/popper.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/arma.js"></script>
    </head>
    <body>
        <div id="cortina"></div>
        <?php include("desplegable.php"); ?>
        <center>
            <br>
            <h1 id="titulo">Armas</h1>
            <div id="tabla"></div><br>
            <div id="registro">
                <table>
                    <tr>
                        <td colspan="5" align="right">
                            <label class="ico-atras"></label>
                        </td>
                    </tr>
                    <tr>
                        <th>Serial</th>
                        <th>Calibre</th>
                        <th>Tipo Arma</th>
                    </tr>
                    <tr>
                        <td><input type="text" id="serial" class="campo"></td>
                        <td><input type="text" id="calibre" class="campo"></td>
                        <td><input type="text" id="tipoArma" class="campo"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="3">
                            <button id="enviar" value="guardar">Guardar</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="eliminacion">
                <h1>¿Realmente desea eliminar?</h1><br>
                <button class="btn-confirmar-eliminar" value="" id="si">S&iacute;</button>
                <button class="btn-confirmar-eliminar" id="no">No</button>
            </div>
        </center>
    </body>
</html>