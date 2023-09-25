<?php
    include ("conexao.php");
    if (!$conexao) {
        echo ("Não foi possível realizar a conexão!");
        exit;
    }
    else {
        echo ("Conexão criada com sucesso!");
    }
?>