<?php top( 'Регистрация' ) ?>


<h1>Регистрация</h1>
<p><input type="text" placeholder="Логин" id="login"></p>
<p><input type="password" placeholder="Пароль" id="pass"></p>
<p><button onclick="post_query( 'gform', 'register', 'login.pass' )">Регистрация</button></p>





<?php bottom() ?>