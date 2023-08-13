<?php 
$sayfa = "Personel Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM personelist Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $icerik = $_POST['icerik'];
               $ustBaslik = $_POST['ustBaslik'];
               $hata = '';



               if ($_FILES["foto"]["name"] != "") {
                $foto = strtolower($_FILES['foto']['name']);
                if (file_exists('images/' . $foto)) {
                    $hata = "$foto diye bir dosya var";
                } else {
                    $boyut = $_FILES['foto']['size'];
                    if ($boyut > (1024 * 1024 * 2)) {
                        $hata = 'Dosya boyutu 2MB den büyük olamaz.';
                    } else {
                        $dosya_tipi = $_FILES['foto']['type'];
                        $dosya_uzanti = explode('.', $foto);
                        $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                        if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                            //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                            $hata = 'Hata, dosya türü JPEG veya PNG olmalı.';
                        } else {
                            $dosya = $_FILES["foto"]["tmp_name"];
                            copy($dosya, "../images/personel/" . $foto);
                            unlink('../images/personel/' . $sonuc["foto"]); //eski dosya siliniyor.
                        }
                    }
                }
            } else {
                //Eğer kullanıcı fotoğraf seçmedi ise veri tabanındaki resimi değiştirmiyoruz
                $foto = $sonuc["foto"];
            }

            if ($baslik <> "" && $icerik <> "" && $hata == "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
                //Değişecek veriler
                $satir = [
                 'id' => $_GET['id'],
                 'foto' => $foto,
                 'baslik' => $baslik,
                 'ustBaslik' => $ustBaslik,
                 'icerik' => $icerik,
             ];
                // Veri güncelleme sorgumuzu yazıyoruz.
             $sql = "UPDATE personelist SET foto=:foto, baslik=:baslik,ustBaslik=:ustBaslik, icerik=:icerik WHERE id=:id;";             
             $durum = $baglanti->prepare($sql)->execute($satir);

             if ($durum)
             {
                 echo  '<div class="alert alert-success" role="alert">Personel Başarıyla Güncellendi.</div>';
				
            } else {
                      echo  '<div class="alert alert-danger" role="alert">Personel  Güncellenemedi.</div>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                }
            } else {
                  echo  '<div class="alert alert-danger" role="alert">Personel güncellenemedi.</div>' . $hata; // dosya hatası ve form elemanlarının boş olma durumunua göre hata döndürüyoruz.
            }
            if ($hata != "") {
          echo  '<div class="alert alert-danger" role="alert">Personel güncellenemedi.</div>' . $hata;
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
								<h3>Personel Ekle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
							<center>
							<div class="control-group">
											
											 <label for="foto">Personel Fotoğrafı</label>
											 <img width="150" src="../images/personel/<?= $sonuc["foto"] ?>">
										<input  type="file" name="foto" class="form-control-file" id="foto">
										</div>	
								</center>
							<div class="control-group">
											<label class="control-label" for="basicinput">Adı ve Soyadı :</label>
											<div class="controls">
												<input type="text" name="ustBaslik" id="ustBaslik" value="<?= $sonuc["ustBaslik"] ?>" class="span8">
											</div>
										</div>

											
											<div class="control-group">
											<label class="control-label" for="basicinput">Görevi :</label>
											<div class="controls">
												<input type="text" name="baslik"  id="baslik" value="<?= $sonuc["baslik"] ?>" class="span8">
											</div>
										</div>

	
											<div class="control-group">
											<label class="control-label" for="basicinput">Özgeçmiş :</label>
											<div class="controls">
                        <textarea name="icerik" id="icerik">  <?= $sonuc["icerik"] ?></textarea>
												<script>
                        ClassicEditor
                                .create( document.querySelector( '#icerik' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
											</div>
										</div>
										
										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Personel Güncelle</button>
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
