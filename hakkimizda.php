<?php
	include('sgpnl/inc/vt.php');
		$title="Hakkımızda";
	include('inc/header.php');	
	include('inc/navbar.php');
    ?>
	<?php

$sorgu = $baglanti->prepare("SELECT * FROM sayfalar where sayfa='kurumsal'");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Ana Sayfa<i class="fa fa-chevron-right"></i></a></span> <span><?= $sonuc['kucukbaslik'] ?> <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"><?= $sonuc['buyukbaslik'] ?></h1>
          </div>
        </div>
      </div>
    </section>

   	


    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    				<?= $sonuc['icerik'] ?>
    			</div>
    		</div>
    	</div>
    </section>
	
	 <?php
}
?>
       
	
	  <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div id="kvkk" class="col-md-8">
    				<h4>KVKK METNİ</h4>
    				<p>
					<p>6698 sayılı Kişisel Verilerin Korunması Kanunu’nun 10. maddesine göre; kişisel verilerin elde edilmesi sırasında veri sorumluları veya yetkilendirdiği kişilerce, ilgili kişilerin bilgilendirilmesi gerekmektedir. Bu kapsamda:</p>

<p>Acil Hasta Bakım Hizmetleri tarafından, veri sorumlusu sıfatıyla kişisel verilerinizi (ad, soy ad, telefon numarası) iletişim faaliyetlerinin yürütülmesi amacıyla işleyecektir.</p>

<p>Kişisel verileriniz aktarıma tabi tutulmayacaktır.</p>

<p>Kişisel verileriniz web sitemizde yer alan iletişim formu aracılığıyla toplanacaktır. Verilerinizi işlememizin hukuki sebebi, veri işlememize açık rıza vermeniz halinde 6698 sayılı Kanun’un 5. Maddesinde yer alan “açık rıza” olacaktır.</p>

<p>İlgili kişi olarak Kanunun 11 inci maddesinde sayılan haklarınız şunlardır:</p>

<p>Herkes, veri sorumlusuna başvurarak kendisiyle ilgili;</p>

<p>a) Kişisel veri işlenip işlenmediğini öğrenme,</p>

<p>b) Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</p>

<p>c) Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</p>

<p>ç) Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</p>

<p>d) Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,</p>

<p>e) 7 nci maddede öngörülen şartlar çerçevesinde kişisel verilerin silinmesini veya yok edilmesini isteme,</p>

<p>f) (d) ve (e) bentleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>

<p>g) İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</p>

<p>ğ) Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme.</p>
					
					
					</p> 

    			</div>
    		</div>
    	</div>
    </section>

 <?php
	include('inc/footer.php');	
    ?>