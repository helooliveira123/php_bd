<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_login.css">
    <title>Login</title>
</head>
<body>
    <div class="box">
        <form class="form" action="" method="POST">
            <div class="top-header">
                <header>Login</header>
            </div>
            <div class="campo-input">
                <input type="text" class="input" name="txtu" placeholder="Usuário" required>
                <ion-icon name="person-outline"></ion-icon>
            </div>
            <div class="campo-input">
                <input type="password" class="input" name="txts" placeholder="Senha" required>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="campo-input">
                <input type="submit" class="submit" value="Entrar">
            </div>
        </form>
    </div>

    <?php
        include ("conexao.php");
        include ("banco-usuario.php");

        if($_POST){
            $login=$_POST['txtu'];
            $senha=$_POST['txts'];
            if(efetuarLogin($conexao, $login, $senha)){
                session_start();
                $_SESSION['nome']=$login;
                $_SESSION['log']='ativo';
                header("Location: pag_menu.php");
                die();
            }
            else{
                echo("Usuário não encontrado");
            }
        }
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>