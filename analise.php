<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/proprietario.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Proprietario</title>
</head>

<body>
    <?php include('verificarLogin.php'); ?>
    <?php

    $raizA = $raizB = $raizC = $raizD = $soloA = $soloB = $soloC = $soloD = $nema = $amostra = $erroA = $erroB = $contaR = $contaS = $ovos ="";
    $amostra='';



    if (!empty($_GET["amostra"])) {
        $amostra = $_GET["amostra"];
     }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nema"])) {
            $erroA = "O campo acima é obrigatorio!";
        } else {
            $nema = 1;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["amostra"])) {
                $erroA = "O campo acima é obrigatorio!";
            } else {
                $amostra = $_POST["amostra"];
            }
        if (!empty($_POST["nema"]) && !empty($_POST["amostra"])) {
            $ovos = $_POST["ovos"];
            $raizA = $_POST["raizA"];
            $raizB = $_POST["raizB"];
            $raizC = $_POST["raizC"];
            $raizD = $_POST["raizD"];
            $soloA = $_POST["soloA"];
            $soloB = $_POST["soloB"];
            $soloC = $_POST["soloC"];
            $soloD = $_POST["soloD"];
            $contaR = $raizA + $raizB + $raizC + $raizD;
            $contaS = $soloA +$soloB +$soloC +$soloD;
           
            
            require_once("configuracao.php");

            $sql = "insert into resultado_analise (RES_ANA_NEM_ID, REC_ANA_AMO_ID, RES_QTD_SOLO, RES_QTD_RAIZ, RES_QTD_OVOS) values (? ,? ,? ,? ,? )";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "iiddd", $nema,$amostra,$contaS,$contaR,$ovos);

            mysqli_stmt_execute($comando);

            if (mysqli_affected_rows($conexao) != 0) {
                echo "<script language='javascript' type='text/javascript'>
                alert('Proprietario cadastrado com sucesso!');window.location.
                href='Painel.php'</script>"; 
            }
            mysqli_stmt_close($comando);
            mysqli_close($conexao);
        }
    }
}
    ?>

    <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
        <a class="navbar-header" href="painel.php"> <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link text-light textTp" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="analise.php" method="POST">

        <div class="col-sm-10 card-1  ">
            <div class="card col-sm-10 offset-md-2  ">
                <div class="card-body ">
                    <!-- DADOS RESPONSAVEL -->
                    <div class="card ">
                        <h5 class="card-header">Dados para Analise</h5>

                        <table class="table table-lg ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">AMOSTRA</th>
                                    <th scope="col">Pratylenchus </th>
                                    <th scope="col">Meloidogyne </th>
                                    <th scope="col">Helicotylenchus</th>
                                    <th scope="col">Rotylenchulus </th>
                                    <th scope="col">Ovos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row ">
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="amostra" placeholder="AM ID" name="amostra"value="<?php echo $amostra ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="Atual" placeholder="Nem ID" name="nema" value="1" readonly 
                                                style="visibility: hidden;" >
                                            </div>

                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-row ">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Atual" placeholder="Raiz" name="raizA" value="<?php $raizA ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Futura" placeholder="Solo" name="soloA" value="<?php $soloA ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-row ">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Atual" placeholder="Raiz" name="raizB" value="<?php $raizB ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Futura" placeholder="Solo" name="soloB" value="<?php $soloB ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-row ">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Atual" placeholder="Raiz" name="raizC" value="<?php $raizC ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Futura" placeholder="Solo" name="soloC" value="<?php $soloC ?>">
                                            </div>
                                        </div>
                                    <td>
                                        <div class="form-row ">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Atual" placeholder="Raiz" name="raizD" value="<?php $raizD ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="Futura" placeholder="Solo" name="soloD"value="<?php $soloD ?>" >
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-row ">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" id="Atual" placeholder="Raiz" name="ovos" value="<?php $ovos ?>">
                                            </div>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class=" d-flex justify-content-center p-3">
                        <button type="submit" class="btn btn-success btn-lg  ">Enviar Analise</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>