<?php
if(isset($_POST["submit"])){


try {
$dbh = new PDO("mysql:host=$host;dbname=hasta;charset=utf8",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO yorumlar (adsoyad, yorum)
VALUES ('".$_POST["adsoyad"]."','".$_POST["yorum"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('Yorumunuz iletildi. Onaylandığında yayınlacaktır. Teşekkür Ederiz.');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Yorumunuz iletilemedi');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>	