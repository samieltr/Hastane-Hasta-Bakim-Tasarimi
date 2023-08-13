<?php
	include('sgpnl/inc/vt.php');
		$title="Mutlu Müşteri Yorumları";
	include('inc/header.php');	
	include('inc/navbar.php');
    ?> 
	
	
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Ana Sayfa<i class="fa fa-chevron-right"></i></a></span> <span>Yorumlar<i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">MÜŞTERİ YORUMLARI</h1>
          </div>
        </div>
      </div>
    </section>

   	<style>
	
	body{
    margin-top:20px;
    background-color:#e9ebee;
}

.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #262626;
    margin-bottom: 15px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-img-comment {
    width: 60px;
    height: 60px;
    float: left;
    margin-bottom: 15px;
}

.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-name {
    font-size: 13px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}


	</style>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
							 <?php

$sorgu = $baglanti->prepare("SELECT * FROM yorumlar where onay=1");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    			<div class="col-md-8">
    				
					
<div class="be-comment-block">
	<h1 class="comments-title">Toplam Yorum : <?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM yorumlar where onay=1");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></h1>
 <?php

$sorgu = $baglanti->prepare("SELECT * FROM yorumlar where onay=1");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
	<div class="be-comment" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
		<div class="be-img-comment">	
			<a href="#">
				<img src="/images/mutlu.jpg" alt="" class="be-ava-comment">
			</a>
		</div>
		<div class="be-comment-content">
			
				<span class="be-comment-name">
					<a href="#"><?= $sonuc['adsoyad'] ?></a>
					</span>
				<span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
					<?= $sonuc['Tarih'] ?>
				</span>

			<p class="be-comment-text">
				<?= $sonuc['yorum'] ?>
			</p>
		</div>
	</div>
	<?php
}
?>


</div>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Adınız ve Soyadınız</label>
    <input type="text" class="form-control" name="adsoyad" id="name" placeholder="Samet Erten">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Yorumunuz</label>
    <textarea class="form-control" name="yorum" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
    <div class="form-group">
<input type="submit" value="Gönder" name="submit" class="btn btn-secondary py-3 px-4"/>
  </div>
</form>

<?php
if(isset($_POST["submit"])){


try {
$dbh = new PDO("mysql:host=$host;dbname=acilhast_sgbilisim",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO yorumlar (adsoyad, yorum)
VALUES ('".$_POST["adsoyad"]."','".$_POST["yorum"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('Yorumunuz iletildi. Onaylandığında yayınlacaktır. Teşekkür Ederiz.');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Yorumunuz iletilemedi');</script>";
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
    	</div>
    </section>
	

   
	   
	
	
 <?php
	include('inc/footer.php');	
    ?>