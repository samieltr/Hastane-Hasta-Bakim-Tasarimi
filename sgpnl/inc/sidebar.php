<div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Ana Sayfa</a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>Panel Sistem Bildirimleri </a></li>
                                <li><a href="musteriliste.php"><i class="menu-icon icon-inbox"></i>Müşteri Listesi <b class="label green pull-right">
                                          		  <?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM musteri ");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b> </a></li>
                                <li><a href="personeliste.php"><i class="menu-icon icon-tasks"></i>Personel Listesi <b class="label green pull-right">
                                   		  <?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM personelist where aktif=0");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
								<li><a href="kurumsaliste.php"><i class="menu-icon icon-envelope"></i>Kurumsal</a></li>
								 <li><a href="#"><i class="menu-icon icon-envelope"></i>Medya</a></li>
								  <li><a href="yorumliste.php"><i class="menu-icon icon-envelope"></i>Müşteri Yorumları</a></li>
								  <li><a href="seffaflikliste.php"><i class="menu-icon icon-envelope"></i>Şeffaflık</a></li>
								  </ul>
								    <ul class="widget widget-menu unstyled">
                                <li><a href="kresimliste.php"><i class="menu-icon icon-table"></i>Kayan Resimler</a></li>
                                <li><a href="iletisimliste.php"><i class="menu-icon icon-bar-chart"></i>İlelişim Formu <b class="label green pull-right"><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM iletisim ");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b></a></li>
								   <li><a href="bilgiedinmeliste.php"><i class="menu-icon icon-bar-chart"></i>Bilgi Edinme Formu <b class="label green pull-right"><?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM bilgiedinme");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b></a></li>
                            </ul>
                            <!--/.widget-nav-->
							
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Çıkış</a></li>
                            </ul>
                        </div>