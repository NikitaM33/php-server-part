<?php top( 'Вход' ) ?>


<h1>Вход</h1>
<p><input type="text" placeholder="Логин" id="login"></p>
<p><input type="password" placeholder="Пароль" id="pass"></p>
<p><button onclick="post_query( 'gform', 'login', 'login.pass' )">Войти</button><button>Восстановить пароль</button></p>




<?php bottom() ?>