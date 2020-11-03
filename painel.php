<!DOCTYPE html>
<html>


<head>
     <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Inicial</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="css/Painel.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include('verificarLogin.php'); ?>


    <!-- Custom nvbar color -->
    <nav class="navbar navbar-expand-lg  fixed-top static-top mb-5 shadow naveg ">
        <a class="navbar-header" href="#">
            <img src="../imagens/fitos.png" width="150" height="50"></a>

        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse p-2" id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link textTp text-light" href="logout.php">Sair<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- fim nav -->


    <!-- cards-->
    <div class="auto" style="top:85px">
        <div class="d-flex justify-content-center">
            <h1 class="display-1 font-weight-bold " style="font-size:3.5rem;  color:#fff">Bem vindo ao Sistema, <?php echo $_SESSION['usuario']; ?>!</h1>
        </div>
    </div>
<div class="">
    <div class="divTp p-6">
        <div class="pt-table desktop-768">
            <div class="container ">
                <div class="row ">
                    <div class="">
                        <div class="hexagon-menu clear ">

                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="laboratorio.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Cadastro Laboratórios</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="crq.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Responsavel Tecnico</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="consulta_res.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Resultados</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="cad_amostra.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Cadastro de Amostras</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container1" style="position:relative ">
                <div class="row ">
                    <div class="">
                        <div class="hexagon-menu clear ">

                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <a href="proprietario.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Cadastro de Proprietario</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="cadastro.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Cadastro de Usuarios</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hexagon-item ">
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="hex-item">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href="selecionarAnalise.php" class="hex-content">
                                    <span class="hex-content-inner">
                                        <span class="icon">
                                            <i class="fa fa-universal-access"></i>
                                        </span>
                                        <span class="title" style="font-weight: 800;">Analisar</span>
                                    </span>
                                    <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1">
                                        <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530BF"></path>
                                    </svg>
                                </a>
                            </div>



                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>