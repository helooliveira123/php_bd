<!DOCTYPE html>
<?php
    include ("conexao.php");
    include ("banco-cliente.php");
    $cod_cliente=$_GET['cod_cliente'];
    $cliente=busca($conexao, $cod_cliente);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_cadastrar_alterar_cliente">
    <title>Alterar Cliente</title>
</head>
<body>
    <div class="box">
        <form class="form" method="POST" action="verificaAlteracao.php">
            <div class="top-header">
                <header id="header">Alterar Cliente</header>
            </div>
            <div class="input-list">
                <div class="campo-input">
                    <label for="">Código</label>
                    <input type="text" class="input" name="txtcod" value="<?php echo $cliente['cod_cliente']?>">   
                </div>
                <div class="campo-input">
                    <label for="">Nome</label>
                    <input type="text" class="input" name="txtnome" value="<?php echo $cliente['nome']?>">
                </div>
                <div class="campo-input">
                    <label for="">Telefone</label>
                    <input type="text" class="input" name="txttel" value="<?php echo $cliente['telefone']?>">
                </div>
                <div class="campo-input">
                    <label for="">Endereço</label>
                    <input type="text" class="input" name="txtend" value="<?php echo $cliente['endereco']?>">
                </div>
                <div class="campo-input">
                    <label for="">E-mail</label>
                    <input type="text" class="input" name="txtemail" value="<?php echo $cliente['email']?>">
                </div>
                <div class="campo-input">
                    <label for="">Idade</label>
                    <input type="text" class="input" name="txtidade" value="<?php echo $cliente['idade']?>">
                </div>
                <div class="campo-input">
                    <label for="">Salário</label>
                    <input type="text" class="input" name="txtsal" value="<?php echo $cliente['salario']?>">
                </div>        
            </div>
            <input class="submit" id="submit" type="submit" value="Alterar" name="btn">
        </form>
    </div>
</body>
</html>