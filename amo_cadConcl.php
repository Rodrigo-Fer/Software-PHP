<?php include('verificarLogin.php'); ?>
    <?php

    $idCultC = $_POST["idcult"];
    $horaC = $_POST["horaC"];
    $horaS = $_POST["horaS"];
    $amostraF = $_POST["amoF"];
    $amostraC = $_POST["amoC"];
    $desc = $_POST["desc"];
    $peso  = $_POST["peso"];
    $cadTipo  = $_POST["cadtipo"];
    $cadPropC  = $_POST["cadpropri"];
    $cadRespC  = $_POST["cadresp"];
    $usuarioC  = $_POST["usuario"];
    $lab = $_POST["lab"];


    if (!empty($usuarioC)) {



        require_once("configuracao.php");
        $sql =  "insert into amostra (AMO_TAN_ID, AMO_LAB_ID, AMO_PRI_ID, AMO_CUL_ID, AMO_USR_ID, AMO_RES_ID, AMO_DESCRICAO, AMO_DH_CHEG, AMO_DH_SAIDA, AMO_PESO, AMO_FINALIZADA, AMO_CANCELADA) values (?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?);";

        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($comando, "iiiiiisssdss", $cadTipo, $lab, $cadPropC, $idCultC, $usuarioC, $cadRespC, $desc, $horaC, $horaS, $peso, $amostraF, $amostraC);

        mysqli_stmt_execute($comando);

        if (mysqli_affected_rows($conexao) != 0) {
            echo "<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.
                href='Painel.php'</script>";
        }

        mysqli_stmt_close($comando);
        mysqli_close($conexao);
    }
    ?>
    
