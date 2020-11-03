<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/cadastroUsu.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Cadastro</title>
</head>



<body>
  <?php
  $codigo = $nomeRes = $nomePri = $user = $soma = $descri = $resul =$status= "";
  if (!empty($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
  }
  if (!empty($codigo)) {

    $sql = "select amostra.AMO_CANCELADA,amostra.AMO_FINALIZADA,amostra.AMO_DH_CHEG, amostra.AMO_DH_SAIDA,proprietario.PRI_NOME,cultura.CUL_DESCRICAO,responsavel_tecnico.RES_NOME,usuario.USR_EMAIL,
    sum(resultado_analise.RES_QTD_OVOS + resultado_analise.RES_QTD_RAIZ + resultado_analise.RES_QTD_SOLO)
    as SOMA from amostra
    inner join cultura on cultura.CUL_ID = amostra.AMO_CUL_ID
    inner join proprietario on proprietario.PRI_ID = amostra.AMO_PRI_ID
    inner join responsavel_tecnico on responsavel_tecnico.RES_TEC_ID = amostra.AMO_RES_ID
    inner join usuario on usuario.USR_ID  = amostra.AMO_USR_ID
    inner join resultado_analise on resultado_analise.REC_ANA_AMO_ID = amostra.AMO_ID
    where resultado_analise.RES_ID =  ? ";
    require_once("configuracao.php");
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, "i", $codigo);

    mysqli_stmt_execute($comando);

    $resultado = mysqli_stmt_get_result($comando);


    if (mysqli_num_rows($resultado) == 1) {
      $linha = mysqli_fetch_array($resultado);
      $nomeRes = $linha["RES_NOME"];
      $nomePri = $linha["PRI_NOME"];
      $user = $linha["USR_EMAIL"];
      $soma = $linha["SOMA"];
      $descri = $linha["CUL_DESCRICAO"];
      $chegada =$linha["AMO_DH_CHEG"];
      $saida =$linha["AMO_DH_SAIDA"];
      $final =$linha["AMO_FINALIZADA"];
      $cancel =$linha["AMO_CANCELADA"];
    } else {
      $linha = mysqli_fetch_array($resultado);
      $nomeRes = $nomePri = $user = $soma = $descri =  "O  cadastro não existe";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexao);
    mysqli_stmt_close($comando);
  }
  if($soma>0 && $soma<=50){
    $resul = "Nivel de Interpretação: BAIXO";
  }else if($soma>50 && $soma<=300){
    $resul = "Nivel de Interpretação: MÉDIO";
  }else if($soma>300 && $soma<=1000){
    $resul = "Nivel de Interpretação: ALTO";
  }else{
    $resul = "Nivel de Interpretação: MUITO ALTO";
  }
  if($final == 1){
    $status = "FINALIZADA";
  }else if(($final == 0) &&($cancel ==1)){
    $status = "CANCELADA";
  }else{
    $status = "ABERTA";
  }
  
  ?>
  <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
    <a class="navbar-header" href="painel.php"> <img src="../imagens/fitos.png" width="150" height="50"></a>
    <!--logo-->

    <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
      <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

        <li class="nav-item active">
          <a class="nav-link text-light textTp" href="consulta_res.php">Voltar<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="d-flex justify-content-center">
    <div class="card col-8 ">
      <div class="card-header">
        Resultados
      </div>
      <div class="card-body">
        <form action="resul_amostra.php" method="$_GET">
          <div class="form-row p-3  ">
            <div class="col">
              Proprietario
              <input type="text" class="form-control" value="<?php echo $nomePri ?>" readonly>
            </div>
            <div class="col">
              Responsavel
              <input type="text" class="form-control" value="<?php echo $nomeRes ?>" readonly>
            </div>
          </div>
          <div class="form-row p-3">
            <div class="col">
              Resultado
              <input type="text" class="form-control" value="<?php echo $resul ?>" readonly>
            </div>
          </div>
          <div class="form-row p-3  ">
            <div class="col">
              Usuario
              <input type="text" class="form-control" value="<?php echo $user ?>" readonly>
            </div>
            <div class="col">
              Descricão da coleta
              <input type="text" class="form-control" value="<?php echo $descri ?>" readonly>
            </div>
          </div>
          <div class="form-row p-3  ">
            <div class="col">
              Hora e Data Entrada
              <input type="text" class="form-control" value="<?php echo $chegada ?>" readonly>
            </div>
            <div class="col">
             Hora e Data Final
              <input type="text" class="form-control" value="<?php echo $saida ?>" readonly>
            </div>
            <div class="col">
              Status
              <input type="text" class="form-control" value="<?php echo $status ?>" readonly>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>