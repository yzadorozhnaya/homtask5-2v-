<?php 
session_start(); 
$users = [
[
'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
],
[
'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
],
[
'login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'
],
[
'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
],
[
'login' => 'Sasha', 'password' => 'Alea_est_jacta', 
],
];
foreach ($users as $key) {		
if ($_POST["login"]==$key['login'] && $_POST["password"]==$key['password'] ) {
	$_SESSION["user_name"]= $_POST["login"];
	$_SESSION["lang"]= $key["lang"];
	 header("Location: secretplace.php");	
}
}
?>
<html><body>
 Вы ввели неверный пароль!
 </body></html>

