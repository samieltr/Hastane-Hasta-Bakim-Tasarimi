<?php
	include('sgpnl/inc/vt.php');
		$title="İletişim";
	include('inc/header.php');	
	include('inc/navbar.php');
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Ana Sayfa <i class="fa fa-chevron-right"></i></a></span> <span>İletişim <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Bize Ulaşın</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-12">
						<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12231.749285550259!2d32.875067253289245!3d39.965154044248116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34deb138cc583%3A0xa7cb9d5752f203b2!2zQWx0xLFucGFyaywgQWx0xLFuZGHEny9BbmthcmE!5e0!3m2!1str!2str!4v1691951769172!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
						
					</div>
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-7 d-flex">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Bize Ulaşın</h3>
										<form action="" method="post" class="appointment">
							<div class="row justify-content-center">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="adsoyad" id="name" class="form-control" required="required" placeholder="Adınız ve Soyadınız"/></div></div><br /><br />
<div class="col-md-6">

<input type="text" name="tel" id="email"  class="form-control" required="required" placeholder="Telefon Numaranız"/></div><br/><br />
<div class="col-md-6">

<input type="text" name="eposta" id="city" class="form-control" required="required" placeholder="E-Posta Adresiniz"/></div><br/><br />
<div class="col-md-6">
<div class="form-group">
<textarea name="mesaj" placeholder="Mesajınız"> Mesajınız</textarea></div></div><br/><br />
<br>
<div class="col-md-6">
<div class="form-group">
<input type="submit" value="Gönder" name="submit" class="btn btn-secondary py-3 px-4"/></div></div><br />

										<!-- Bilgilendirme Formu  -->
				
									
										<p><font color="red">*</font> Formu dolduranlar için 24 saat içinde dönüş sağlamaktayız. Dönüşlerimiz telefon,e-posta veya whatsapp üzerinden gerçekleşecektir.</p>
		    					<p><font color="red">*</font>Bu formu doldurarak paylaşacağınız kişisel verilere ilişkin <a data-test="test" rel="nofollow" style="word-wrap: break-word;" target="_blank" onclick="return dhExternalLinkRedirect(this)" href="hakkimizda.php#kvkk" data-href="hakkimizda.php#kvkk"><font color="black"> Aydınlatma metnini</font></a> okumuş ve kişisel verilerinizin işlenmesine rıza göstermiş bulunmaktasınız.</p>
								</div>
			          </form>	
					  <?php
if(isset($_POST["submit"])){


try {
$dbh = new PDO("mysql:host=$host;dbname=acilhast_sgbilisim",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO iletisim (adsoyad, tel, eposta, mesaj)
VALUES ('".$_POST["adsoyad"]."','".$_POST["tel"]."','".$_POST["eposta"]."','".$_POST["mesaj"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('Mesajınız bize ulaştı. En kısa sürede size geri dönüş sağlanacaktır.');</script>";
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
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
										<h3 class="mb-4 mt-md-4">İletim Bilgilerimiz</h3>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Adres:</span>Ömer Halis Demir Bulvarı - Altındağ/Ankara</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Telefon:</span> <a href="tel://905326298589">(+90) 555 333 2211</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>E-Posta:</span> <a href="mailto:iletisim@acilhastabakim.com">iletisim@acilhastabakim.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>  
	<?php
	//include('inc/vt.php');
	include('inc/footer.php');	
    ?>