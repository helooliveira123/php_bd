<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_cadastrar_alterar_cliente">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div class="box">
        <form class="form" action="verificaCadastro.php" method="post">
            <div class="top-header">
                <header>Cadastro de Cliente</header>
            </div>
            <div class="input-list">
                <div class="campo-input">
                    <label for="">Nome</label>
                    <input type="text" class="input" name="txtnome" placeholder="Digite nome">   
                </div>
                <div class="campo-input">
                    <label for="">Telefone</label>
                    <input type="text" class="input" name="txttel" placeholder="Digite telefone">
                </div>
                <div class="campo-input">
                    <label for="">Endereço</label>
                    <input type="text" class="input" name="txtend" placeholder="Digite endereço">
                </div>
                <div class="campo-input">
                    <label for="">E-mail</label>
                    <input type="text" class="input" name="txtemail" placeholder="Digite email">
                </div>
                <div class="campo-input">
                    <label for="">Idade</label>
                    <input type="text" class="input" name="txtidade" placeholder="Digite idade">
                </div>
                <div class="campo-input">
                    <label for="">Salário</label>
                    <input type="text" class="input" name="txtsal" placeholder="Digite salário">
                </div>        
            </div>
            <input type="submit" class="submit" value="Cadastrar" name="btn">
        </form>
    </div>
</body>
</html>