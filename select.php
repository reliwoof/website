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
require_once "logowanie.php";
$sql="SELECT * FROM uzytkownicy where Imie=`Ewa`;";
if ($wynik=@$polaczenie->query($sql))
{
$wiersz=$wynik->fetch_assoc();
echo $wiersz['imie'];
}
$polaczenie->close();



?>
</body>
</html>