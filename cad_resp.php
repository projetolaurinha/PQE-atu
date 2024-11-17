<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/cad.css">


    <!--links externos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/7148/7148801.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!--script-->
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <title>Focaut</title>
</head>
    <style>

        /* Menu */

        @font-face {
            font-family: 'menuFont';
            src: url('./assets/font/Baloo/Baloo2-Bold.ttf');
        }

        .nav-list li a{
            font-family: menuFont;
        }

        /* Contato */

        @font-face {
            font-family: 'cttFont';
            src: url('./assets/font/Nunito/Nunito-VariableFont_wght.ttf');
        }  

        .login-button button a{
            font-family: cttFont;
        }

        /* Menu */

        @font-face {
            font-family: 'menuFont';
            src: url('./assets/font/Baloo/Baloo2-Bold.ttf');
        }

        .container-extras h1{
            font-family: menuFont;
        }
    </style>
<body>
     <header id="header" class="header">
        <nav class="nav-bar">
            <div class="logo">
                <a href="index.html" alt="logo Focaut"><h1>pqe.</h1></a>
            
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img id="icon" src="assets/img/svg/menu-svgrepo-com.svg" alt="menu hamburguer"></button>
            </div>
         </nav>
        
     </header><!-- end header -->
     

     <div class="container">
        <h2>Login</h2>
        <form>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="senha">Username:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit"><a href="responsaveis.html">Concluir</a></button>
        </form>

        <button class="google-login">
            <img src="assets/img/png/icone_google.png" alt="">
            Fazer Login com Google
        </button>
    </div>


 </body>