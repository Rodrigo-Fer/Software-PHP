<?php 
    define("SERVIDOR", "127.0.0.1:3300'");
    define("USUARIO", "root");
    define("SENHA", "root");
    define("BANCO_DADOS", "fito_sollos");
    define("PORTA", "3300");

    $conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO_DADOS,PORTA);

    ?>