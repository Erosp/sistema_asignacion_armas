<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/upesa.css">
        <link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/popper.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>js/funcioni.js"></script>
    </head>
    <body class="bg-light">
        <div class="container">
            <center><h1>Bienvenido al </h1></center>
            <div class="row">
                <div class="col-sm-1 col-md-4"></div>
                <div class="col-sm-10 col-md-4 columna rounded">
                    <form class="formula">
                        <div class="form-groud my-4">
                            <center><div class="error_l"></div></center>
                            <center><label class="lbnom d-none d-md-block">Nombre de Usuario:</label></center>
                            <input type="text" class="form-control usu" name="usu" maxlength="20" placeholder="Introduzca su nombre de usuario.">
                            <center><div class="error_u"></div></center>
                        </div>
                        <div class="clave form-groud my-4">
                            <center><label class="d-none d-md-block">Contrase&ntilde;a:</label></center>
                            <input type="password" class="form-control pass" name="pass" maxlength="16" placeholder="Introduzca su contrase&ntilde;a.">
                            <center><div class="error_p"></div></center>
                        </div>
                        <div class="form-groud my-4 d-flex justify-content-center">
                            <input type="button" value="Entrar" class="btn btn-danger boton" role="button">
                        </div> 
                    </form>
                </div>
                <div class="col-sm-1 col-md-4"></div>
            </div>
        </div>
    </body>
</html>