<?php

if ( $_POST['login_f'] ) {
    message( 'Авторизация' );
}

else if ( $_POST['register_f'] ) {
    // email_valid();
    // password_valid();

    // if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` = '$_POST[email]'")) )
    //     message('Этот E-mail уже используется');

    // $code = random_str(5);

    // $SESSION['confirm'] = array(
    //     'email' => $_POST['email'],
    //     'password' => $_POST['password'],
    //     'code' => $code,
    // );

    // mail($_POST['email'], 'Регистрация', "Код подтверждения регистрации: <b>$code</b>" );

    // go('confirm');

    // message( 'OK' );
}

else if ( $_POST['recovery_f'] ) {
    message( 'Восстановление пароля' );
}

else if ( $_POST[ 'confirm_f' ] ) {
    message( 'Подтверждение' );
}






?>