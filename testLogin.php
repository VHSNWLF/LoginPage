<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['email_username']) && !empty($_POST['password'])){
        //Acessa
        include_once('database/config.php'); 
        
        $email_username = $_POST['email_username'];
        $senha = $_POST['password'];

        // print_r('Email: ' . $email_username);
        // print_r('<br>');
        // print_r('Senha: ' . $password);

        $sql1 = "SELECT * FROM cl202247.EcoMomentBD_UsuarioWeb WHERE NomeWeb = '$email_username' AND SenhaWeb = '$senha'"; //nome de usuario
        $sql2 = "SELECT * FROM cl202247.EcoMomentBD_UsuarioWeb WHERE EmailWeb = '$email_username' AND SenhaWeb = '$senha'";//email

        $result1 = $con->query($sql1);
        $result2 = $con->query($sql2);

        // print_r($result1); //se tiver 1 usuario com o nome e a senha, o numero de rows sera igual a 1
        // print_r('<br>');
        // print_r($result2); //se tiver 1 usuario com o email e a senha, o numero de rows sera igual a 1

        if(mysqli_num_rows($result1) == 1 ||  mysqli_num_rows($result2) == 1){
            // print_r('Existe');
            //criando uma variavel na sessao e atribuindo seus respectivos valores
            $_SESSION['email'] = $email_username;
            $_SESSION['senha'] = $senha;
            //--------------------------------------------------------------------
            header('Location: logado.php');
        }else{
            // print_r('Não existe nenhum usuario com esses dados');
            //destruindo todos os dados
            unset($_SESSION['email']); 
            unset($_SESSION['senha']);
            //--------------------------
            header('Location: loginPage.php');
        }
    }
    else{
        header('Location: loginPage.php');
    }

?>