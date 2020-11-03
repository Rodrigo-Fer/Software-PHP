<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/cadastroUsu.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>

    <script language="JavaScript">
        function enviardados() {

            if (document.formo.cultura.value == "") {
                alert("Preencha o campo!");
                document.formo.cultura.focus();
                return false;
            }
        }
    </script>
    <?php include('verificarLogin.php');

    $cultura = $erro = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["cultura"])) {
            $erro = "O campo acima é obrigatorio!";
        } else {
            $cultura = $_POST["cultura"];
        }
		
    }
    ?>
    <!-- Custom nvbar color -->
    <nav class="navbar navbar-expand-lg  fixed-top static-top mb-5 shadow naveg ">
        <a class="navbar-header" href="painel.php">
            <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse p-6" id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link textTp text-light" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="cad_amoDados.php" method="POST" class="p-5" name="formo">
        <div class="p-3">
            <div class="col-sm-10 p-3">
                <div class="card p-3 offset-md-2  ">
                    <div class="card-body p-3">

                        <div class="form-group row">
                            <label for="usuario" class="col-3 col-form-label">Insira a Descrição da cultura</label>
                            <div class="col-8">
                                <input class="form-control" placeholder="Ex: Cevada" type="text" id="usuario" name="cultura" value="<?php $cultura ?>" data-ls-module="charCounter" maxlength="45">
                                <p class="text-danger"> <?php echo $erro ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <button type="submit" class="btn btn-success btn-lg" onClick="enviardados()">Proximo</button>
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