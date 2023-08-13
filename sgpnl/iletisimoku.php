<?php 
$sayfa = "Müşteri Bilgi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "uyedetay";

$sorgu = $baglanti->prepare("SELECT * FROM iletisim Where id=:id");
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
								<h3>İletişim Formu Bilgi Ekranı</h3>
							</div>
							<p><a href="iletisimliste.php" class="btn btn-info">Geri Dön</a></p>
								<table class="table table-striped table-bordered table-condensed" width="100%" border="2">
								  <thead>
									<tr>
									  <th>Adı Soyadı:</th>
									  <td><?= $sonuc["adsoyad"] ?></td>
									  <th>Tel No:</th>
									  <td><?= $sonuc["tel"] ?></td>
									  <th>T.C : <?= $sonuc["eposta"] ?></th>
									</tr>
								  </thead>
								  <tbody>
									<td colspan="5">Mesaj: <?= $sonuc["mesaj"] ?></td>
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
