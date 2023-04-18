<!--Выход из админпанели-->

<?php

session_start();

unset ($_SESSION ["login"]) ;
unset ($_SESSION ["password"]) ;

header('Location: /admin/admin.php');

