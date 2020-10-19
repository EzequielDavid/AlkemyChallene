
<!DOCTYPE html>
<html>
<head>
<title>RyftenStore</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href= "/RyftenStore/Css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/RyftenStore/Css/indexMobile.css">
<link rel="stylesheet" href="/RyftenStore/Css/detailStyle.css">
<link rel="stylesheet" href="/RyftenStore/Css/detailMobile.css">
<link rel="stylesheet" href="/RyftenStore/Css/searchStyle.css">
<link rel="stylesheet" href="/RyftenStore/Css/UserSessionStyle.css">
<link rel="stylesheet" href="/RyftenStore/Css/modifyStyle.css">
<link rel="shortcut icon" href="/RyftenStore/img/Logo.png" type="image/x-icon">
<script defer src="/RyftenStore/js/home.js"></script>
</head>
<body id="myPage">


<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class='w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2' href='javascript:void(0);' onclick='openNav()'><i class='fa fa-bars'></i></a>
        <a id="contenedorLogo" href="/RyftenStore/index.php" class="w3-bar-item w3-button w3-orange"><img id="logo" src="/RyftenStore/img/icono.svg">Home</a>
        <form id="formSearch" method="post" action="/RyftenStore/Pages/Apps/Search.php">
            <i id="icon" class="fa fa-search"></i><input id="search" type="search" name="search">
            <input  id="botonSearch" class="w3-bar-item w3-button  w3-hover-orange fa fa-search" type="submit" value="Search">
        </form>
        <div id="loginContainer" class="w3-hide-small ">
            <ul>
                <?php
                session_start();
                if(isset($_SESSION["user"]))
                {
                    echo"<li class='w3-margin-right w3-margin-bottom nameUser'>{$_SESSION['user']}</li>
                          <form method='post' action='/RyftenStore/Pages/Users/LoginController.php'>
                          <input class='w3-hover-orange logout' type='submit' name='logout' value='logout'>
                          </form> ";
                }
                else{
                    echo"
                     <li id='login' class='w3-hover-orange'><a href='#'>Login</a></li>
                     <div id='login-content'>
                    <form method='post' action='/RyftenStore/Pages/Users/LoginController.php'>
                        <input class='user' type='text' required=' ' placeholder='User Name' name='user'>
                        <input class='pass' type='password' required=' ' placeholder='Password' name='password'>
                        <input class='submit' type='submit' value='Login'>
                        <button class='submit createAccount'><a href='/RyftenStore/Pages/Users/SingIn.php'>Sing In</a></button>
                    </div>           
                    </form>";
                }
                    ?>
            </ul>
        </div>

    </div>
</div>

<!-- Navbar on small screens -->
        <?php
            if(isset($_SESSION['user']))
            {
             echo"   <div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium userSmall'>
                        <li class='w3-margin-right w3-margin-bottom user'>{$_SESSION['user']}</li>
                        <form method='post' action='/RyftenStore/Pages/Users/LoginController.php'>
                        <input class='w3-hover-teal logout' type='submit' name='logout' value='logout'>
                        </form>
                     </div>   
                        ";
             }
             else
            {
                echo "<div id='navDemo' class='w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium'>
                       <ul id='loginMobile'>
                             <form id='formMobile' method='post' action='/RyftenStore/Pages/Users/LoginController.php'>
                                <input class='user' type='text' required='' placeholder='User Name' name='user'>
                                <input class='pass' type='password' required='' placeholder='Password' name='password'>
                                <input class='submit' type='submit' value='Login'>
                                <button class='submit createAccount'><a href='/RyftenStore/Pages/Users/SingIn.php'>Sing in</a></button>
                           </form>
                         </ul>
                     </div>";
           }

        ?>


