<?php top( 'Подтверждение' ) ?>


<h1>Подтверждение</h1>
<p><input type="text" placeholder="Код" id="code"></p>
<p><input type="password" placeholder="Пароль" id="pass"></p>
<p><button onclick="post_query( 'gform', 'confirm', 'code.pass' )">Подтвердить</button></p>





<?php bottom() ?>