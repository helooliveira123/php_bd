<!DOCTYPE html>
<?php
    include ("conexao.php");
    include ("banco-cliente.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_listar_cliente.css">
    <title>Lista de Clientes</title>
</head>
<body>
    <div class="top-header">
        <header>Clientes Cadastrados</header>
    </div>
    <div class="content">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>E-mail</th>
                        <th>Idade</th>
                        <th>Salário</th>
                        <th>Excluir</th>
                        <th class="last-element">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $clientes=listarClientes($conexao);
                        foreach($clientes as $cliente):
                     ?>
                    <tr>
                        <td><?php echo $cliente['cod_cliente'] ?></td>
                        <td><?php echo $cliente['nome'] ?></td>
                        <td><?php echo $cliente['telefone'] ?></td>
                        <td><?php echo $cliente['endereco'] ?></td>
                        <td><?php echo $cliente['email'] ?></td>
                        <td><?php echo $cliente['idade'] ?></td>
                        <td><?php echo $cliente['salario'] ?></td>
    
                        <td>
                            <a href="pag_excluir_cliente.php?cod_cliente=
                            <?php echo $cliente['cod_cliente']?>">Excluir</a>
                        </td>
    
                        <td class="last-element">
                            <a href="pag_alterar_cliente.php?cod_cliente=
                            <?php echo $cliente['cod_cliente']?>">Alterar</a>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>