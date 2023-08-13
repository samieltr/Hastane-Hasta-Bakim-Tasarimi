<body>
  	<div class="top py-1">
  		<div class="container">
  			<div class="row">
	    		<div class="col d-flex align-items-center">
					<p class="mb-0"> <a href="https://api.whatsapp.com/send?phone=905554443322&text=Bilgi%20Almak%20%C4%B0stiyorum"><button type="button" class="btn btn-outline-success"><i class="fab fa-whatsapp"></i>&nbsp;
Whatsapp İletişim</button></a> 
		  <a href="#" class="btn btn-outline-warning"><i class="fas fa-briefcase"></i>&nbsp;Bizimle Çalışmak İster misiniz?</a>
 </p>
	    		</div>
	    		<div class="col-4 d-flex justify-content-end">
	    			<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
	    		</div>
	    	</div>
  		</div>
  	</div>
		<div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
						<a class="navbar-brand" href="index.php"><img src="images/acilogo.png" width="175"  alt=""></a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-8 mb-md-0 mb-3">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
									<div class="text"><span>Adres :</span><span>Ömer halis demir blv Altındağ /Ankara</span></div>
								</div>
							</div>
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
									<div class="text"><span>Bilgi ve İletişim</span><span>(+90) 555 333 2211</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menüler
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
			<?php $aktif_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
	        	<li <?php echo((strpos($aktif_link, '/') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="index.php" class="nav-link">Ana Sayfa</a></li>
	        	<li <?php echo((strpos($aktif_link, 'hakkimizda.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="hakkimizda.php" class="nav-link">Kurumsal</a></li>
	        	<li <?php echo((strpos($aktif_link, 'personel.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="personel.php" class="nav-link">Personellerimiz</a></li>
	        	<li <?php echo((strpos($aktif_link, 'hizmetlerimiz.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="hizmetlerimiz.php" class="nav-link">Hizmetlerimiz</a></li>
	        	<li <?php echo((strpos($aktif_link, 'medya.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="medya.php" class="nav-link">Medya</a></li>
				<li <?php echo((strpos($aktif_link, 'seffaflik.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="seffaflik.php" class="nav-link">Şeffaflık</a></li>
				<li <?php echo((strpos($aktif_link, 'yorumlar.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item"><a href="yorumlar.php" class="nav-link">Mutlu Müşteriler</a></li>
	          <li <?php echo((strpos($aktif_link, 'iletisim.php') !== false) ?
'class="nav-item active "' : ''); ?> class="nav-item" ><a href="iletisim.php" class="nav-link">İletişim</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->