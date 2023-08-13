<?php 
$sayfa = "Müşteri Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $tckimlik = $_POST['tckimlik'];
   $telefon = $_POST['telefon'];
   $tip = $_POST['tip'];
   $adres = $_POST['adres'];
   $saat = $_POST['saat'];
    $hata = "";


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'adsoyad' => $adsoyad,
                            'tckimlik' => $tckimlik,
                            'telefon' => $telefon,
						    'tip' => $tip,
							'adres' => $adres,
							'saat' => $saat,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO musteri SET adsoyad=:adsoyad, tckimlik=:tckimlik,telefon=:telefon,tip=:tip,adres=:adres,saat=:saat;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo  '<div class="alert alert-success" role="alert">Müşteri Başarıyla Eklendi.</div>';
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
								<h3>Müşteri Ekle</h3>
							</div>
							<div class="module-body">
						
					<form method="post" action="musteriekle.php" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
							<div class="control-group">
											<label class="control-label" for="basicinput">Adı ve Soyadı :</label>
											<div class="controls">
												<input type="text" name="adsoyad" id="adsoyad" placeholder="Samet Erten" class="span8">
											</div>
										</div>
			
											
											<div class="control-group">
											<label class="control-label" for="basicinput">T.C Kimlik No :</label>
											<div class="controls">
												<input type="text" name="tckimlik" minlength="11" maxlength="11" id="tckimlik" placeholder="12345678901" class="span8">
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label" for="basicinput">Tel No :</label>
											<div class="controls">
												<input type="text" name="telefon" minlength="11" maxlength="11" id="telefon" placeholder="05554541213" class="span8">
											</div>
										</div>

								<div class="control-group">
											<label class="control-label" for="basicinput">Alınan Hizmet :</label>
											<div class="controls">
												<input type="text" name="tip" id="tip" placeholder="Covid-19 Hasta Bakım" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Açık Adres :</label>
											<div class="controls">
												<input type="text" name="adres" id="adres" placeholder="a mah. b sokak 12/13 Ankara/Altındağ" class="span8">
											</div>
										</div>
	
									<div class="control-group">
											<label class="control-label" for="basicinput">Saat Aralığı :</label>
											<div class="controls">
												<input type="text" name="saat" id="saat" placeholder="09.00 - 16.00" class="span8">
											</div>
										</div>
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Müşteri Ekle</button>
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
