<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/laboratorio.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cadastrar novo Laboratório</title>
</head>

<body>
	<?php include('verificarLogin.php'); ?>
	<?php
	  
	  $cnpj = $endereco = $telefone  = $erroA = $erroB = $erroC = '';
	  
	   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["cnpj"])) {
            $erroA = "O campo acima é obrigatorio!";
        } else {
            $cnpj = $_POST["cnpj"];
        }
        if (empty($_POST["endereco"])) {
            $erroB = "O campo acima é obrigatorio!";
        } else {
            $endereco = $_POST["endereco"];
        }
        if (empty($_POST["telefone"])) {
            $erroC = "O campo acima é obrigatorio!";
        } else {
            $telefone = $_POST["telefone"];
        }
		
		
		
		if (!empty($cnpj) && !empty($endereco) && !empty($telefone)) {
			 
			require_once("configuracao.php");

            $sql = "insert into laboratorio (LAB_CNPJ, LAB_ENDERECO, LAB_TELEFONE) values (? ,? ,? )";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "sss", $cnpj, $endereco, $telefone);

            mysqli_stmt_execute($comando);
			
            if (mysqli_affected_rows($conexao) != 0) {
                echo "<script language='javascript' type='text/javascript'>
                alert('Laboratorio cadastrado com sucesso!');window.location.
                href='painel.php'</script>";
            }

            mysqli_stmt_close($comando);
            mysqli_close($conexao);
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

    <form action="laboratorio.php" method="POST" class="cardS">

        <div class="divTp " >
            <h5 class="card-header textTp ">Cadastrar Novo Laboratório</h5>
            <div class="col-sm-10  ">
                    <div class="card-body ">
                        <div class="form-group row textTp">
                            <label for="example-text-input" class="col-3 col-form-label">CNPJ</label>
                            <div class="col-9 ">
                                <input class="form-control "  type="text" value="<?php echo $cnpj ?>" data-ls-module="charCounter" maxlength="14" id="cnpj" name="cnpj">
								<p class="text-danger"> <?php echo $erroA ?></p>
                            </div>
                        </div>
                        <div class="form-group row textTp ">
                            <label for="example-text-input" class="col-3 col-form-label">Endereço</label>
                            <div class="col-9 ">
                                <input class="form-control "  type="text" value="<?php echo $endereco ?>" data-ls-module="charCounter" maxlength="45" id="endereco" name="endereco">
								<p class="text-danger"> <?php echo $erroB ?></p>
                            </div>
                        </div>
                        <div class="form-group row textTp">
                            <label for="example-text-input " class="col-3 col-form-label">Telefone</label>
                            <div class="col-9 ">
                                <input class="form-control " type="text" value="<?php echo $telefone ?>" data-ls-module="charCounter" maxlength="10" id="telefone" name="telefone">
								<p class="text-danger"> <?php echo $erroC ?></p>
                            </div>
                        </div>
                        <div class="posit p-3">
                            <button type="submit" class="btn btn-success btn-lg ">Enviar cadastro</button>
                        </div>
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