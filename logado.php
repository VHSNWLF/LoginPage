<?php
    session_start();
    // print_r($_SESSION);
    if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: loginPage.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
        }
        header{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: grey;
            padding: 15px;
        }
        p{
            color: white;
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
        }
            .button {
                cursor: pointer;
                position: relative;
                padding: 10px 24px;
                font-size: 18px;
                color: black;
                background-color: red;
                border: 2px solid red;
                border-radius: 34px;
                background-color: transparent;
                font-weight: 600;
                transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
                overflow: hidden;
            }
            .button::before {
                content: '';
                position: absolute;
                inset: 0;
                margin: auto;
                width: 50px;
                height: 50px;
                border-radius: inherit;
                scale: 0;
                z-index: -1;
                background-color: red;
                transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            }
            .button:hover::before {
                scale: 3;
            }
            .button:hover {
                color: white;
                scale: 1.1;
                box-shadow: 0 0px 20px rgba(193, 163, 98,0.4);
            }
            .button:active {
                scale: 1;
            }
            section{
                margin-top: 2rem;
                text-align: center;
            }
            a{
                font-family: Arial, Helvetica, sans-serif;
                text-decoration: none;
            }
    </style>
</head>
<body>
    <header>
        <p>TESTE TEMPORÁRIO</p>
        <a class="button" href="sair.php">Sair</a>
    </header>
    <section>
        <h1>Estou Logado com Sucesso</h1>
        <?php
            echo "<h2>Bem vindo <u>$logado</u></h2>"
        ?>
    </section>
</body>
</html>