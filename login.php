<?php
   $login = filter_var(trim($_POST['Email Address']),
   FILTER_SANITIZE_STRING);
   $login = filter_var(trim($_POST['Password']),
   FILTER_SANITIZE_STRING);
   $login = filter_var(trim($_POST['EConfirm password']),
   FILTER_SANITIZE_STRING);
   if(mb_strlen($login) < 12 ll mb_strlen($login) > 999999999999 {
       echo "длина логина слишком большая";
       exit();
   }
   $mysql = new $mysqli('localhost', 'root', 'root', 'register')
   $mysql->query('INSERT INTO 'users' (login, password, confirm-password));
   VALUES('$login, $password, $confirm-password');

   $mysql->close();
?>