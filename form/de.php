<html>
<head>
<title>insert data in database using PDO(php data object)</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>Insert data into database using PDO</h1>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="" method="post" >
		    					<div class="row justify-content-center">
										<div class="col-md-6">
											<div class="form-group">
					             <input type="text" name="adsoyad" id="name" required="required" placeholder="Please Enter Name"/>
					            </div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					              <input type="text" name="tel" id="email" required="required" placeholder="john123@gmail.com"/>
					            </div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
			                  <input type="text" name="hizmet" id="city" required="required" placeholder="Please Enter Your City"/>
			                    </div>
					              </div>
					    				</div>
										</div>
								
										<div class="col-md-6">
											<div class="form-group">
					    					<div class="input-wrap">
					            		<div class="icon"><span class="fa fa-calendar"></span></div>
					            		<input type="text" name="tarih" id="city" required="required" placeholder="Please Enter Your City"/>
				            		</div>
					    				</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
					              <input type="submit" value="Başvurunuzu Tamamlayın" class="btn btn-secondary py-3 px-4">
					            </div>
								
										</div>
										<!-- Bilgilendirme Formu  -->
				
									
										<p><font color="red">*</font> Formu dolduranlar için 24 saat içinde dönüş sağlamaktayız. Dönüşlerimiz telefon yoluyla veya whatsapp üzerinden gerçekleşecektir.</p>
		    					<p><font color="red">*</font>Bu formu doldurarak paylaşacağınız kişisel verilere ilişkin <a data-test="test" rel="nofollow" style="word-wrap: break-word;" target="_blank" onclick="return dhExternalLinkRedirect(this)" href="hakkimizda.php#kvkk" data-href="hakkimizda.php#kvkk"><font color="black"> Aydınlatma metnini</font></a> okumuş ve kişisel verilerinizin işlenmesine rıza göstermiş bulunmaktasınız.</p>
								</div>
			          </form>			  			
</div>
<!-- Right side div -->

</div>
<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=sghasta",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO bilgiedinme (adsoyad, tel, hizmet, tarih)
VALUES ('".$_POST["adsoyad"]."','".$_POST["tel"]."','".$_POST["hizmet"]."','".$_POST["tarih"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>