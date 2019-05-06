<?php

if($_SERVER['REQUEST_URI'] == '/') $page = 'home';
else { $page = substr($_SERVER['REQUEST_URI'], 1);
    if( !preg_match('/^[A-z0-9]{3,15}$/', $page) ) exit( 'error url' );
}

$CONNECT = mysqli_connect('127.0.0.1', 'root', '', 'portal_bd');

if (!$CONNECT) exit('Fuck! The data base didn`t connect!');




session_start();

if ( file_exists("all/$page.php") ) include "all/$page.php";
else if ( $_SESSION['ulogin'] == 1 and file_exists("auth/$page.php") ) include "auth/$page.php";
else if ( $_SESSION['ulogin'] != 1 and file_exists("guest/$page.php") ) include "guest/$page.php";
else exit ( 'Страница 404' );


// function message( $text ) {
//     exit ('{ "message" : "'.$text.'" }');
// }

// function go( $url ) {
//     exit ('{ "go" : "'.$url.'" }');
// }

// function random_str( $num = 30 ){
//     return substr( str_shuffle( '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ), 0, $num );
// }

// function email_valid() {
//     if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL)) message( 'Email указан не верно' );
// }

// function password_valid() {
//     if ( !preg_match( '/^[A-z0-9]{10,30}$/', $_POST['password']) )
//         message( 'Пароль указан не верно' );
    
//     $_POST['password'] = md5( $_POST['password'] );
// }



function top( $title ) {

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <title>'.$title.'</title>
    </head>

    <body>

        <div class="wrapper">
            <div class="menu">
                <a href="/">Главная</a>
                <a href="/login">Вход</a>
                <a href="/register">Регистрация</a>
            </div>
            <div class="content">
                <div class="block">
                    
    ';
}

function bottom() {
    echo '  
                </div>
            </div>
        </div>
        


    </body>
    </html>
    
    ';
}





?>