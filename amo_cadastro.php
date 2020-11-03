<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/cad_amo.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Confirmar</title>
</head>

<body>

    <?php
    include('verificarLogin.php');
    $usuario = $_SESSION['usuario'];


    $idCult = "";
    $horaC = $_POST["horaC"];
    $horaS = $_POST["horaS"];
    $amostraF = $_POST["amostraF"];
    $amostraC = $_POST["amostraC"];
    $desc = $_POST["desc"];
    $peso  = $_POST["peso"];
    $cadTipo  = $_POST["cadtipo"];
    $cadProp  = $_POST["cadpropri"];
    $cadResp  = $_POST["cadresp"];
    $cadCul  = $_POST["cadcultura"];
    $lab = 1;


    require_once("configuracao.php");
    $sql = "SELECT usuario.USR_ID, cultura.CUL_ID, RES_TEC_ID,PRI_ID from usuario,cultura,responsavel_tecnico,proprietario where usuario.USR_EMAIL = ? and cultura.CUL_DESCRICAO = ? and responsavel_tecnico.RES_NOME = ? and proprietario.PRI_CNPJ_CPF =?;   ";

    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, "ssss", $usuario, $cadCul, $cadResp, $cadProp);
    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);
    if (mysqli_num_rows($resultado) == 1) {
        $linha = mysqli_fetch_array($resultado);
        $cadRespC = $linha["RES_TEC_ID"];
        $usuarioC = $linha["USR_ID"];
        $idCultC = $linha["CUL_ID"];
        $cadPropC = $linha["PRI_ID"];
        mysqli_free_result($resultado);
        mysqli_close($conexao);
        mysqli_stmt_close($comando);
    }





    ?>

    <form action="amo_cadConcl.php" method="POST">
        <input class="invi" type="text" id="email" name="usuario" value="<?php echo $usuarioC ?>" readonly>
        <input class="invi" type="text" id="email" name="cadpropri" value="<?php echo $cadPropC ?>" readonly>
        <input class="invi" type="text" id="email" name="cadresp" value=" <?php echo $cadRespC ?>" readonly>
        <input class="invi" type="text" id="email" name="cadtipo" value="<?php echo $cadTipo ?>" readonly>
        <input class="invi" type="text" id="email" name="idcult" value="<?php echo $idCultC ?>" readonly>
        <input class="invi" type="text" id="email" name="horaS" value="<?php echo $horaS ?>" readonly>
        <input class="invi" type="text" id="email" name="horaC" value="<?php echo $horaC ?>" readonly>
        <input class="invi" type="text" id="email" name="amoC" value="1" readonly>
        <input class="invi" type="text" id="email" name="amoF" value="1" readonly>
        <input class="invi" type="text" id="email" name="desc" value="<?php echo $desc ?>" readonly>
        <input class="invi" type="text" id="email" name="peso" value="<?php echo $peso ?>" readonly>
        <input class="invi" type="text" id="email" name="lab" value="<?php echo $lab ?>" readonly>
        <div class="card p-3 cust">
            <div class="card-body ">
                <div class="p-5">
                    <h1 class=" d-flex justify-content-center">DESEJA REALMENTE CONFIRMAR O CADASTRO ?</h1>
                    <div class="p-5">
                        <div class="mx-auto  d-flex justify-content-center ">
                            <button type="submit" class="btn btn-success btn-lg   ">Confirmar</button>
                        </div>
                        <div class="mx-auto  d-flex justify-content-center p-3 ">
                            <a class="btn btn-danger btn-lg" href="painel.php" role="button">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>