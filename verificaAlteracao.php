<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_menu.css">
    <title>Alteração</title>
</head>
<body>
    <div class="content">
        <?php
            include ("conexao.php");
            include ("banco-cliente.php");

            $cod_cliente=$_POST['txtcod'];
            $nome=$_POST['txtnome'];
            $tel=$_POST['txttel'];
            $end=$_POST['txtend'];
            $email=$_POST['txtemail'];
            $idade=$_POST['txtidade'];
            $sal=$_POST['txtsal'];

            if(alterar($conexao, $nome, $tel, $end, $email, $idade, $sal, $cod_cliente)){
                echo ("<p>Cliente alterado com sucesso!</p>"); 
            }
            else{
                $msg=mysqli_errno($conexao);
                echo $msg;
            }
        ?>
        <br>
        <div class="logout-button">
            <button><?php echo "<a href='pag_listar_cliente.php'>Voltar<a> "; ?></button>
        </div>   
    </div>
</body>
</html>