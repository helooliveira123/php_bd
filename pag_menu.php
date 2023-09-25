<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['log']!='ativo'){
        session_destroy();
        header("Location: pag_login.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag_menu.css">
    <title>Menu</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li>
                    <a href="pag_cadastrar_cliente.php" class="nav-link">Cadastro</a>
                    <?php
                        $_SESSION['verifica'] = 'ativo';
                    ?>
                </li>
                <li>
                    <a href="pag_listar_cliente.php" class="nav-link">Gerenciamento</a>
                    <?php
                        $_SESSION['verifica'] = 'ativo';                        
                    ?>
                </li>
            </ul>
            <div class="logout-button">
                <button><?php echo "<a href='logout.php'>Sair<a> "; ?></button>
            </div>    
        </div>
        <div class="content">
            <?php echo "<p>Olá, ".$_SESSION['nome']."!</p>"; ?>
            <h1>Bem-vindo ao sistema!</h1>
            <?php die(); ?>
        </div>
    </div>
</body>
</html>