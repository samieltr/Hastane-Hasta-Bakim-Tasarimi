<?php 
$sayfa = "Müşteri Bilgi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "uyedetay";

$sorgu = $baglanti->prepare("SELECT * FROM musteri Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $ustBaslik = $_POST['ustBaslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $baslik = $_POST['baslik'];
			   $icerik = $_POST['icerik'];
               $hata = '';
	   }
?>
<style>
p
   {
      position: relative;

      right: -20px;
   }
							</style>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                     <?php include 'inc/sidebar.php';?>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                           
						   
						  
							<div class="module-head">
								<h3>Müşteri Bilgi Ekranı</h3>
							</div>
							<p><a href="musteriliste.php" class="btn btn-info">Geri Dön</a></p>
								<table class="table table-striped table-bordered table-condensed" width="100%" border="2">
								  <thead>
									<tr>
									  <th>Adı Soyadı:</th>
									  <td><?= $sonuc["adsoyad"] ?></td>
									  <th>Tel No:</th>
									  <td><?= $sonuc["telefon"] ?></td>
									  <th>T.C : <?= $sonuc["tckimlik"] ?></th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									<th>Hizmet:</th>
									 <td><?= $sonuc["tip"] ?></td>
									 <th>İstenilen Saatler:</th>
									 <td><?= $sonuc["saat"] ?></td>
									 <td>Atanan : <?= $sonuc["calisan"] ?></td>
									</tr>
									<tr>
									<td colspan="5">Adres: <?= $sonuc["adres"] ?></td>
									</tr>
									
									
								  </tbody>
								</table>
									
								
								
								
					</div>
							
						</div><!--/.module-->

							<!-- Modül Sonu-->
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
 <?php include 'inc/footer.php';?>
