
    <nav class="navbar bg-theme-primary">
        <a class="navbar-brand" href="#">
            <img id="img-fluid" src="../assets/img/logoDashboard.svg" style="height: 50px !important;" alt="logo">
        </a>

        <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
            aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon3"><span></span><span></span><span></span></div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent22">

            <!-- Links --> 
            <!-- <span class="sr-only">(current)</span> -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a href="inicio.php" class="nav-link text-uppercase font-weight-bold <?= $pagina_atual == 'inicio' ? 'text-white' : ''; ?>">
                        Inicio
                    </a>
                </li>

                <?= $perfil_admin ? '<li class="nav-item"><a href="usuarios.php" class="nav-link text-uppercase font-weight-bold '. ($pagina_atual == 'usuarios' ? 'text-white' : '') .' ">Usuários</a></li>' : '' ?>

                <li class="nav-item text-uppercase font-weight-bold <?= $pagina_atual == 'visitas' ? 'text-white' : ''; ?>">
                    <a href="visitas.php" class="nav-link">
                        Visitas
                    </a>
                </li>
                <li class="nav-item text-uppercase font-weight-bold <?= $pagina_atual == 'relatorio' ? 'text-white' : ''; ?>">
                    <a href="../views/relatorios.php" class="nav-link">
                        Relatório
                    </a>
                </li>

            </ul>

        </div>
    </nav>
