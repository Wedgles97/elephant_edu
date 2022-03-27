<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logoFavicon.png">

    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="assets/lib/bootstrap-4.0.0-dist/css/bootstrap.min.css">

    <title>Elephant EDU :: Dashboard</title>
</head>
<body>
    <main>
        <div class="container" style="margin: 0 200px; padding: 0;">
            <div class="row">
                <div class="col-3 card" style="background-color: #153575; height: 100vh;">
                    <a id="dashboard" href="#">
                        <div id="container-logo" class="d-flex justify-content-center" style="height: 7vh; margin-top: 1.25rem">
                            <img id="img-fluid" src="assets/img/logoDashboard.svg" alt="logo">
                        </div>
                    </a>

                    <hr> <!-- Falta estilizar o hr --->

                    <div id="container-menu" style="margin-top: 50px">
                        <ul>
                            <li><a href="#" class="btn">Inicio</a></li>
                            <li><a href="#" class="btn">Cadastro</a></li>
                            <li><a href="#" class="btn">Visitas</a></li>
                            <li><a href="#" class="btn">Relatório</a></li>
                        </ul>
                    </div>

                    <div class="card" style="background-color: #7F9ECD;"id="">
                        <h3 style="color: #FFF">Cargo:</h3>
                        <img src="assets/img/avatar_man_boy.png" style="width: 50px; height: 50px;" alt="">
                        <h4 style="color: #FFF">Nome Sobrenome</h4>

                        <button type="" class="">SAIR</button>
                        <i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="col-9">
                    <div>
                        <form action="">
                            formulário
                        </form>                        
                    </div>
                    <div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Data de Visita</th>
                                    <th>Colégio/Universidade</th>
                                    <th colspan="2" style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>João Marcos</td>
                                    <td>15/03/2022</td>
                                    <td>Diocesano</td>
                                    <td><button class="btn btn-primary">Alterar</button></td>
                                    <td><button class="btn btn-danger">Deletar</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>José Mateus</td>
                                    <td>22/02/2022</td>
                                    <td>Alternativo</td>
                                    <td><button class="btn btn-primary">Alterar</button></td>
                                    <td><button class="btn btn-danger">Deletar</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alice Maria</td>
                                    <td>03/01/2022</td>
                                    <td>Uninassau</td>
                                    <td><button class="btn btn-primary">Alterar</button></td>
                                    <td><button class="btn btn-danger">Deletar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/lib/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>