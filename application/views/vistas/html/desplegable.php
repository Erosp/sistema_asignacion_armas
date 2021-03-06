<nav class="navbar navbar-expand-lg navbar-light fondo-nav">
            <a class="navbar-brand text-primary" href="#">Sistema Inventario &nbsp;&nbsp;&nbsp;&nbsp;|</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="<?= base_url() ?>menu">Inicio <span class="sr-only">(current)</span></a>
                    </li><li class="nav-item">
                        <a class="nav-link text-primary" href="<?= base_url() ?>asignaciones">Asignaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Entregas</a>
                    </li>
                    <li class="nav-item"><li class="nav-item">
                        <a class="nav-link text-primary" href="#">Inventario</a>
                    </li>
                    <div class="dropdown show">
                      <a class="btn dropdown-toggle text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instrumentaria
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Accesorios</a>
                        <a class="dropdown-item" href="<?= base_url() ?>arma">Armas</a>
                        <a class="dropdown-item" href="#">Munici&oacute;n</a>
                      </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Funcionarios</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="dropdown show">
                      <a class="btn dropdown-toggle text-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administrador
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Usuarios</a>
                        <a class="dropdown-item" href="../">Cerrar Sesi&oacute;n</a>
                      </div>
                    </div>
                </form>
            </div>
        </nav>