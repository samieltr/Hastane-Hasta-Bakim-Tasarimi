<?php
	include('sgpnl/inc/vt.php');
		$title="Şeffaflık";
	include('inc/header.php');	
	include('inc/navbar.php');
    ?> 
	<?php

$sorgu = $baglanti->prepare("SELECT * FROM sayfalar where sayfa='seffaflik'");
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
   
	   
	
	
 <?php
	include('inc/footer.php');	
    ?>