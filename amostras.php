<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/amostra.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Amostras</title>
</head>

<body>

    <?php include('verificarLogin.php');


    ?>
    <?php
     date_default_timezone_set('America/Sao_Paulo');
    $tipo = $propri = $resp = $horaC = $horaS   = $desc = $peso = "";
    $amostraF = $amostraC = 0;
    


    if (!empty($_POST["desc"])) {
        $horaC = date("Y-m-d H:i:s");
        $horaS = date("Y-m-d H:i:s");
        $amostraF = $_POST["amostraF"];
        $amostraC = $_POST["amostraC"];
        $desc = $_POST["desc"];
        $peso  = $_POST["peso"];
        $cadTipo  = $_POST["cadtipo"];
        $cadProp  = $_POST["cadpropri"];
        $cadResp  = $_POST["cadresp"];
        $cadCul  = $_POST["cadcultura"];
    }
    if(empty($_POST["propri"])){
        echo"<script language='javascript' type='text/javascript'>
        alert('Os dados do proprietario não foram encotrados, verifique os dados estão corretos ou faça um novo cadastro.');window.location.
        href='cad_amostra.php'</script>;";
    }

    if (!empty($_POST["tipo"])) {
        $cadCul  = $_POST["cultura"];
        $cadTipo = $tipo = $_POST["tipo"];
        $cadProp = $propri = $_POST["propri"];
        $cadResp = $resp = $_POST["resp"];
        $cadCul = $cultura = $_POST["cultura"];
    }
    if (!empty($tipo)) {
        require_once("configuracao.php");

        $sql = "SELECT tipo_analise.TAN_DESCRICAO, proprietario.PRI_NOME, responsavel_tecnico.RES_NOME FROM tipo_analise, proprietario, responsavel_tecnico
        where (tipo_analise.TAN_ID = ?) and ( proprietario.PRI_CNPJ_CPF = ?) and (responsavel_tecnico.RES_NOME =?); ";

        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "sss", $tipo, $propri, $resp);

        mysqli_stmt_execute($comando);

        $resultado = mysqli_stmt_get_result($comando);

        $linha = mysqli_fetch_array($resultado);

        $tipo = $linha["TAN_DESCRICAO"];
        $propri = $linha["PRI_NOME"];
        $resp =  $linha["RES_NOME"];
        if(empty($propri)){
            echo"<script language='javascript' type='text/javascript'>
        alert('Os dados do proprietario não foram encotrados, verifique os dados estão corretos ou faça um novo cadastro.');window.location.
        href='cad_amostra.php'</script>;";
        }

        mysqli_free_result($resultado);
        mysqli_close($conexao);
        mysqli_stmt_close($comando);
    }

    ?>

    <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
        <a class="navbar-header" href="painel.php"> <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link text-light textTp" href="cad_amoDados.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="amo_cadastro.php" method="POST" name="formAmos">
        <div class="card-body  ">
            <div class="form-group row ">
                <label for="example-email-input" class="col-1 col-form-label">Tipo da Analise</label>
                <div class="col-10">
                    <input class="form-control" name="tipo" type="text" value="<?php echo $tipo ?>" id="example-email-input" readonly >
                </div>

            </div>
            <div class="form-group row ">
                <label for="example-email-input" class=" col-1 col-form-label">Proprietario</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="<?php echo $propri ?>" id="example-email-input" readonly name="cadpropri">

                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6">
                    <label for="example-email-input" class=" col-3 col-form-label">Cultura</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="<?php echo $cultura ?>" id="example-email-input" readonly name="cultura">
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Usuario</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value=" <?php echo $_SESSION['usuario']; ?>" id="example-email-input" readonly>
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Responsavel Tecnico</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value=" <?php echo $resp ?>" id="example-email-input" readonly name="cadresp">
                    </div>
                </div>

            </div>
            <div class="form-row  ">
                <div class="form-group row col-6 ">
                    <label for="Hchegada" class=" col-3 col-form-label">Hora de chegada</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="<?php echo date("Y-m-d H:i:s"); ?>" id="Hchegada" name="horaC" readonly>
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Hora de Saida</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value=<?php echo date("Y-m-d H:i:s");?> id="example-email-input" name="horaS" readonly>
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6">
                    <label for="example-email-input" class=" col-3 col-form-label">Amostra Finalizada</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="<?php $amostraF?>" id="example-email-input" name="amostraF" readonly>
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Amostra Cancelada</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="<?php $amostraC ?>" id="example-email-input" name="amostraC" readonly>
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6">
                    <label for="example-email-input" class=" col-3 col-form-label">Descrição</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="<?php $desc ?>" id="example-email-input" name="desc">
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Peso</label>
                    <div class="col-4">
                        <input class="form-control" type="text" value="<?php $peso ?>" id="example-email-input" name="peso">
                    </div>
                </div>
            </div>
        </div>
        <input class="invi" type="text" id="email" name="cadcultura" value="<?php echo $cadCul?>" readonly>
                <input class="invi" type="text" id="email" name="cadpropri" value="<?php echo $cadProp?>" readonly>
                <input class="invi" type="text" id="email" name="cadresp" value="<?php echo $cadResp?>" readonly>
                <input class="invi" type="text" id="email" name="cadtipo" value="<?php echo $cadTipo?>" readonly>
        <div class="d-flex justify-content-center p-5">
            <input class="btn btn-success" type="submit" value="Enviar Ficha">
        </div>
                 
    </form>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>