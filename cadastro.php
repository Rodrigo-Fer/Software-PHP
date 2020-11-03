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
   
    $usuario = $email = $senha = $erroA = $erroB = $erroC = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["usuario"])) {
            $erroA = "O campo acima é obrigatorio!";
        } else {
            $usuario = $_POST["usuario"];
        }
		
        if (empty($_POST["email"])) {
            $erroB = "O campo acima é obrigatorio!";
        } else {
            $email = $_POST["email"];
        }
		
        if (empty($_POST["senha"])) {
            $erroC = "O campo acima é obrigatorio!";
        } else {
            $senha = $_POST["senha"];
        }
        if (!empty($usuario) && !empty($email) && !empty($senha)) {

            require_once ("configuracao.php");

            $sql = "insert into usuario (USR_NOME, USR_SENHA, USR_EMAIL) values (? ,? ,? )";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "sss", $usuario, $senha, $email);

            mysqli_stmt_execute($comando);
            
            if(mysqli_affected_rows($conexao) != 0){
                echo "<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.
                href='painel.php'</script>";
                   
            }

            mysqli_stmt_close($comando);
            mysqli_close($conexao);
            
        }
    }

    ?>

    <!-- Custom nvbar color -->
    <nav class="navbar navbar-expand-lg  fixed-top static-top mb-5 shadow naveg ">
        <a class="navbar-header" href="painel.php">
            <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse p-2" id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link textTp text-light" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="cadastro.php" method="POST" class="d-flex justify-content-center">

        <div class="card col-6" style=" top:100px">
            <h5 class="card-header">Cadastrar Novo Usuário</h5>
            <div class="card-body">
                <div class="form-group row">
                    <label for="usuario" class="col-3 col-form-label">Insira seu Login </label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="usuario" name="usuario" value="<?php echo $usuario ?>">
                        <p class="text-danger"> <?php echo $erroA ?></p>
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="email" class="col-3 col-form-label">Insira seu Email </label>
                        <div class="col-10">
                            <input class="form-control" type="email" id="email" name="email" value="<?php echo $email ?>">
                            <p class="text-danger"> <?php echo $erroB ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="senha" class="col-3 col-form-label">Insira sua senha </label>
                        <div class="col-10">
                            <input class="form-control" type="password" id="senha" name="senha" value="<?php echo $senha ?>">
                            <p class="text-danger"> <?php echo $erroC ?></p>
                        </div>
                    </div>
               

                <button type="submit" class="btn btn-success btn-lg  ">Cadastrar</button>
                <a class="btn btn-danger btn-lg" href="painel.php" role="button">Cancelar</a>
            </div>


        </div>


    </form>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>