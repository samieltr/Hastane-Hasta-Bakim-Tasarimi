<?php
if(isset($_POST["submit"])){


try {
$dbh = new PDO("mysql:host=$host;dbname=hasta",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO bilgiedinme (adsoyad, tel, hizmet, tarih)
VALUES ('".$_POST["adsoyad"]."','".$_POST["tel"]."','".$_POST["hizmet"]."','".$_POST["tarih"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('Başvurunuz Alındı.Belirttiğiniz tarihte sizi arayacağız.');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Başvurunuz alınamadı.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>