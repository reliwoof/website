<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Strona główna
</title>
<style>
body {
background-color:black;
color:white;
}
#baner {
width:100%;
height:300px;
text-align:center;
padding:20px;
}
</style>
<link rel="stylesheet" type="text/css" src="./style.css">
</head>
<body>
<div id="baner">
<p><hr>Strona główna</hr></p>
</div>
<br/>
<?php

$imie=$_POST['imie'];
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "szkola";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);



	
if($polaczenie->connect_errno!=0){
	
	
echo "Error: ".$polaczenie->connect_errno;
	
}
	
else
	
{
echo "<font color='white'>Witaj $imie. Połączyłeś/aś się z bazą danych $db_name. <a href='./select.php'> Wybierz dane z bazy</a></font>";
	
$polaczenie->close();
}

?>
</body>
</html>