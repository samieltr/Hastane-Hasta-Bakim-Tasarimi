<?php
	include('sgpnl/inc/vt.php');
	$title="Personellerimiz";
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

   	<section class="ftco-section">
			<div class="container">
				<div class="row no-gutters justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Personellerimiz</span>
            <h2>Aktif Personel Listesi / Özgeçmişleri</h2>
          </div>
        </div>
				<div class="row">
				 <?php

$sorgu = $baglanti->prepare("SELECT * FROM personelist");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
					<div class="col-md-4 ftco-animate d-flex" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
						<div class="staff bg-primary">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/personel/<?= $sonuc['foto'] ?>);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3><?= $sonuc['ustBaslik'] ?></h3>
								<span class="position mb-2"><?= $sonuc['baslik'] ?></span>
								<div class="faded">
									
									<p><a href="personeldetay.php?id=<?= $sonuc["id"] ?>" class="btn btn-info">Özgeçmiş</a></p>
							
	              </div>
							</div>
						</div>
					</div>
		<?php
}
?>
				
			
		
				</div>
			</div>
		</section>
    
  <?php
	//include('inc/vt.php');
	include('inc/footer.php');	
    ?>