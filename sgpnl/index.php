<?php include 'inc/vt.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/navbar.php';?>
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="icon-group"></i><b><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM personelist");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b>
                                        <p class="text-muted">
                                            Toplam Personel</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM musteri");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b>
                                        <p class="text-muted">
                                            Toplam Müşteri</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-map-marker"></i><b><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM personelist where aktif=1");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b>
                                        <p class="text-muted">
                                            Aktif Personel</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>SG-Bilişim Sistem Mesajları</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Kullanıcılar</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Destek Talebi</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="basvuruliste.php" class="btn-box small span4"><i class="icon-ok-sign"></i><b>İş Başvurusu Yapanlar</b></a>
												<a href="personeliste.php" class="btn-box small span4"><i class="icon-group"></i><b>Personel Paneli</b></a>
												<a href="musteriliste.php" class="btn-box small span4"><i class="icon-group"></i><b>Müşteri Bilgileri</b></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php include 'inc/kontrolblok.php';?>
                                </div>
                            </div>
                           
                            <!--/.module-->
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