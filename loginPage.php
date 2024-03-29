<?php

//  session_start();

// require 'database/config.php';

// if ($_SERVER['REQUEST_METHOD'] == "POST"){
//     $email = $_POST['email_username'];
//     $password = $_POST['password'];
// }

//     $sql = "SELECT * FROM cl202247.EcoMomentBD_UsuarioWeb WHERE NomeWeb = ? AND SenhaWeb = ?";  //Verificar se o utilizador existe

//     $stmt = $con->prepare($sql);
//     $stmt->bind_param('ss',$email, $password);  // Bind the parameters with variable
//     $stmt->execute();   // Execute the prepared statement

//     $result = $stmt->get_result();

//     if($result->num_rows === 1){
//         $row = $result->fetch_assoc();

//         if (password_verify( $password , $row["SenhaWeb"])) {
//             $_SESSION["loggedin"] = true;
//             echo  "<script>alert('Logado com sucesso')</script>";
//             header('Location: logado.php');
//             exit;
//     }
// }
// else if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($result->num_rows === 0)){
//     $error = 'Usuario ou senha incorretos';
//     echo  "<script>alert('".$error."')</script>";
// } 



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styleLogin/login-page.css">
    <link rel="stylesheet" href="https://use.typekit.net/xhc2seb.css">
    <link rel="stylesheet" href="styleLogin/mediaQuery.css">


    <style>
        .circeR{
            font-family: "circe", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .circeB{
            font-family: "circe", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>


    
<div class="container">

<!---------------------------------------- Começo da form-image --------------------------------------------------->
        
        <div class="form-image">

            <div class="header">
                <div class="title">
                    <h1 id="bv" class="circeB">BEM VINDO DE</h1>
                    <h1 id="bv2" class="circeB">VOLTA!</h1>
                </div>
            </div>

            <div class="image">
                <img id="ip" src="midias/imgLogin.png" alt="">
            </div>
            
            <div class="logo">
                <img src="midias/EcoMomenticon.ico" alt="">
            </div>
        </div>
        
<!---------------------------------------- Fim da form-image --------------------------------------------------->


<!----------------------------------------Começo da form dos inputs --------------------------------------------------->

        <div class="form">

                <div class="form-header">
                    <div class="bvf logo">
                        <img src="midias/EcoMomenticon.ico" alt="">
                    </div>
                    <div class="title2">
                        <h1 class="circeB">Login</h1>
                    </div>
                </div>

                    <button class="buton circeB" id="b2">
                        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                        <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                        <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                        <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                        <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                      </svg>
                        Continuar com o Google
                      </button>

                    <p id="or" class="circeB">ou</p>

                <form action="testLogin.php" method="POST">
                    <div class="input-group">
                        <div class="input-box">
                            <label class="lbl circeB" for="email_username">E-mail / nome de usuário:</label>
                            <div class="InputContainer">
                                <label for="email_username" class="labelforsearch">
                                    <img id="icon" src="midias/email.png" alt="">
                                </label>
                                <input type="text" name="email_username" class="input" id="email_username" required>
                            <div class="border"></div>
                            <button class="micButton">
                                <img id="icon" src="midias/danger.png" alt="">
                            </button>
                            </div>
                        </div>

                        <div class="input-box">
                            <label class="lbl circeB" for="password">Senha:</label>
                            <div class="InputContainer">
                                <label for="password" class="labelforsearch">
                                    <img id="icon" src="midias/padlock.png" alt="">
                                </label>
                                <input type="password" name="password" class="input" id="password" required>
                              <div class="border"></div>
                              <button class="micButton">
                                <img id="icon" src="midias/danger.png" alt="">
                              </button>
                              </div>
                        </div>
                    </div>

                    <div class="btn-entrar">
                        <button class="button" type="submit">Entrar</button>
                    </div>
                </form>
                <div class="footer">
                    <p class="circeB">Não tem uma conta? <a href="#">Cadastre-se</a></p>
                </div>
                <div class="footer-image">
                    <img class="logo" src="" alt="">
                </div>
        </div>

<!---------------------------------------------- Fim da form dos inputs --------------------------------------------->
    
    </div>
</body>
</html>