<?php 
$sayfa = "Personel Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM musteri Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $tckimlik = $_POST['tckimlik'];
   $telefon = $_POST['telefon'];
   $tip = $_POST['tip'];
   $adres = $_POST['adres'];
   $saat = $_POST['saat'];
    $calisan = $_POST['calisan'];
               $hata = '';


                    }

   

            if (@$adsoyad <> "" && $tckimlik <> "" && $hata == "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
                //Değişecek veriler
                $satir = [
							'id' => $_GET['id'],
							'adsoyad' => $adsoyad,
                            'tckimlik' => $tckimlik,
                            'telefon' => $telefon,
						    'tip' => $tip,
							'adres' => $adres,
							'saat' => $saat,
							'calisan' => $calisan,
							
             ];
                // Veri güncelleme sorgumuzu yazıyoruz.
             $sql = "UPDATE musteri SET adsoyad=:adsoyad,tckimlik=:tckimlik,telefon=:telefon,tip=:tip,adres=:adres,saat=:saat,calisan=:calisan WHERE id=:id;";             
             $durum = $baglanti->prepare($sql)->execute($satir);

             if ($durum)
             {
                 echo  '<div class="alert alert-success" role="alert">Müşteri Başarıyla Güncellendi.</div>';
				
            } else {
                      echo  '<div class="alert alert-danger" role="alert">Müşteri  Güncellenemedi.</div>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                }
            }
           
      










?>


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
                           
						   
						   <div class="module">
							<div class="module-head">
								<h3>Müşteri Güncelle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
							<div class="control-group">
											<label class="control-label" for="basicinput">Adı ve Soyadı :</label>
											<div class="controls">
												<input type="text" name="adsoyad" id="adsoyad" value="<?= $sonuc["adsoyad"] ?>" class="span8">
											</div>
										</div>
			
											
											<div class="control-group">
											<label class="control-label" for="basicinput">T.C Kimlik No :</label>
											<div class="controls">
												<input type="text" name="tckimlik" minlength="11" maxlength="11" id="tckimlik" value="<?= $sonuc["tckimlik"] ?>" class="span8">
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Tel No :</label>
											<div class="controls">
												<input type="text" name="telefon" minlength="11" maxlength="11" id="telefon" value="<?= $sonuc["telefon"] ?>" class="span8">
											</div>
										</div>

								<div class="control-group">
											<label class="control-label" for="basicinput">Alınan Hizmet :</label>
											<div class="controls">
												<input type="text" name="tip" id="tip" value="<?= $sonuc["tip"] ?>" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Açık Adres :</label>
											<div class="controls">
												<input type="text" name="adres" id="adres" value="<?= $sonuc["adres"] ?>" class="span8">
											</div>
										</div>
	
									<div class="control-group">
											<label class="control-label" for="basicinput">Saat Aralığı :</label>
											<div class="controls">
												<input type="text" name="saat" id="saat" value="<?= $sonuc["saat"] ?>" class="span8">
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="basicinput">Atanan Personel Adı ve Soyadı :</label>
											<div class="controls">
												<input type="text" name="calisan" id="calisan" value="<?= $sonuc["calisan"] ?>" class="span8">
											</div>
										</div>
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Müşteri Güncelle</button>
											</div>
										</div>
										
									</form>
							
							</div>
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
