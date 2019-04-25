<?php 
session_start();
if(!isset($_SESSION["user_name"])){
     header("Location: index.php");
     exit;
 }
?>
<form  method="POST">
	<select multiple name="lang">
	<option disabled>выберите язык</option>
    <option value="ru">русский</option>
    <option value="ua">украинский</option>
    <option value="en">английский</option>
    <option value="it">итальянский</option>
	</select> 
	<input type="submit" name="v">
</form>
<?php
$lang=[
'ru' => 'Привет',
'ua' => 'Привіт',
'en' => 'Hello',
'it' => 'Ciao',
];
if(isset($_POST["lang"])){
	$_SESSION['lang'] = $_POST["lang"];
}
echo $lang[$_SESSION["lang"]]. ', ' . $_SESSION["user_name"];
if ($_POST["logout"]==true) {
	unset($_SESSION["user_name"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if(isset($_SESSION["user_name"])){
		?>
		<a href="index.php?logout=true"><br><br>Выход</a>
		<?php 
	}else{
 header("Location: index.php");
	 }?>
</body>
</html>
