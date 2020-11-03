<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FitoSolo-Recebimento</title>
</head>

<body>

    <form action="tabela.php" method="POST">

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand " href="janelasFit.php">FITOSOLO - RECEBIMENTO</a>
        </nav>

        <div class="col-sm-10  ">
            <div class="card col-sm-10 offset-md-2  ">
                <div class="card-body ">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Nome do Solicitante </label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-row ">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Data</label>
                            <input type="date" class="form-control" id="Atual">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Propriedade</label>
                            <input type="text" class="form-control" id="Futura">
                        </div>
                    </div>





                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Municipio</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="inputState" class="custom-select">
                                <option selected>Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="" id="example-email-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefone" class="col-2 col-form-label">Telefone</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" value="" id="telefone">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cultura Atual</label>
                            <input type="text" class="form-control" id="Atual">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cultura Futura</label>
                            <input type="text" class="form-control" id="Futura">
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Tipo de Solicitante</h5>
                        <div class="card-body">
                            <div class="form-row   ">
                                <div class="form-check col-md-6 p-3">
                                    <label class="form-check-label ">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        Particular
                                    </label>
                                </div>
                                <div class="form-check col-md-6 p-3">
                                    <label class="form-check-label ">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        Empresa
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Nematoides</h5>
                        <div class="card-body ">
                            <div class="form-group row  ">
                                <label for="example-text-input" class="col-2 col-form-label">Solo </label>
                                <div class="col-8">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Raiz </label>
                                <div class="col-8">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Identificação de Espécie</h5>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Espécie</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Métodos</h5>
                        <div class="card-body">
                            <div class="form-group row col-8">
                                <label for="inputState">Método Utilizado</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>Jenkins (1964)</option>
                                    <option>Coolen & D'herde (1972)</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-6 col-form-label">Quantidade de Ovos</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-6 col-form-label">Quantidade de Amostras Coletadas</label>
                                <div class="col-8">
                                    <input class="form-control" type="number" value="" id="example-text-input">
                                </div>
                            </div>
                        </div>
                            <div class=" p-3">
                        <button type="submit" class="btn btn-success btn-lg  ">Enviar Formulario</button>
                        <a class="btn btn-primary btn-lg" href="janelasFit.php" role="button">Voltar</a>
                            </div>
                    </div>
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