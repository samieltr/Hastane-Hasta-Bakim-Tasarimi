<?php
	include('sgpnl/inc/vt.php');
	$title="Personel Bilgisi";
	include('inc/header.php');	
	include('inc/navbar.php');
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Ana Sayfa <i class="fa fa-chevron-right"></i></a></span> <span>Personellerimiz <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Personellerimiz</h1>
          </div>
        </div>
      </div>
    </section>
	<?php
$sayfa = "personeldetay";

$sorgu = $baglanti->prepare("SELECT * FROM personelist Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $icerik = $_POST['icerik'];
               $ustBaslik = $_POST['ustBaslik'];
               $sira = $_POST['sira'];
               $aktif = 0;
               if (isset($_POST['aktif'])) $aktif = 1;
               $hata = '';
	   }
?>

   	<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Personellerimiz</span>
            <h2>Aktif Personel Listesi / Özgeçmişleri</h2>
          </div>
        </div>
			<article class="col">
<center>
<table width="100%" border="2">
<tr>
<td width="100"><img width="250" src="images/personel/<?= $sonuc["foto"] ?>" alt="Personellerimiz"></td>
<td><?= $sonuc["icerik"] ?></td>
</tr>
<tr>
<td><center><?= $sonuc["ustBaslik"] ?></center></td>
</tr>
<tr>
<td><center><?= $sonuc["baslik"] ?></center></td>
</tr>
</table>
		</center>	</div>
		</section>
    
  <?php
	//include('inc/vt.php');
	include('inc/footer.php');	
    ?>