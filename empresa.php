<?php
include "./db.php";

$query5="select * from contacto ";
//echo $query3;
				if($recordset5=mysql_query($query5,$con))

				{

					$rs5=mysql_fetch_array($recordset5);

				}
				
				
				
$query6="select * from paginas where idpagina = 1 ";
//echo $query3;
				if($recordset6=mysql_query($query6,$con))

				{

					$rs6=mysql_fetch_array($recordset6);

				}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Perfecto Informatica</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header">
    	<!--Header Top-->
        <div class="header-top">
        	<div class="container">
            	<div class="row clearfix">
                	<!--Top Left-->
                	<div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    	<div class="clearfix">
                        	<div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Llamenos: <a href="#"><?php echo $rs5['telefono'];?></a></div>
                            <div class="pull-left email"><span class="icon flaticon-mail115"></span>Correo : <a href="<?php echo utf8_encode($rs5['email']);?>"><?php echo utf8_encode($rs5['email']);?></a></div>
                        </div>
                    </div>
                    <!--Top Right-->
                    <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                        <div class="social-links">
						<?php if($rs5['facebook']!=''){?>
						<a href="<?php echo $rs5['facebook'];?>" class="fa fa-facebook-f"></a> 
						<?php } ?><?php if($rs5['twitter']!=''){?><a href="<?php echo $rs5['twitter'];?>" class="fa fa-twitter"></a> 
						<?php } ?><?php if($rs5['google']!=''){?><a href="<?php echo $rs5['google'];?>" class="fa fa-google-plus"></a> 
						<?php } ?><?php if($rs5['linkedin']!=''){?><a href="<?php echo $rs5['linkedin'];?>" class="fa fa-linkedin"></a> 
						<?php } ?><?php if($rs5['dribbble']!=''){?><a href="<?php echo $rs5['dribbble'];?>" class="fa fa-dribbble"></a> 
						
						<?php } ?><?php if($rs5['instagram']!=''){?><a href="<?php echo $rs5['instagram'];?>" class="fa fa-instagram"></a> 
						<?php } ?><?php if($rs5['pinterest']!=''){?><a href="<?php echo $rs5['pinterest'];?>" class="fa fa-pinterest-p"></a> 
						
						<?php } ?><?php if($rs5['youtube']!=''){?><a href="<?php echo $rs5['youtube'];?>" class="fa fa-youtube-play"></a>
						<?php } ?> 
						</div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header Lower-->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Volunteer" title="Volunteer"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li class="current dropdown"><a href="index.php">Inicio</a>
                                    
                                </li>
                                <li class="dropdown"><a href="#">Empresa</a>
                                    <ul class="submenu">
                                        <li><a href="empresa.php">Nosotros</a></li>               
                                         
                                        <li><a href="servicios.php">Servicios</a>
                                             
                                        </li>
                                        <li><a href="portfolio.php">Portfolio</a></li>                 
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Productos</a>
                                    <ul class="submenu">
                                       
 <?php

							$query2="SELECT * FROM `subcategoria_poducto` ";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  {?>
									   <li><a href="productos.php?idsubcategoria=<?php echo $rs2['idsubcategoria'];?>"><?php echo utf8_encode($rs2['descripcion']);?></a></li>
										 <?php }?>
										
                                    </ul>
                                </li>
                               
                                
                                
                                <li class="dropdown"><a href="contacto.php">Contacto</a>
                                     
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        <!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                   <li class="current dropdown"><a href="index.php">Inicio</a>
                                    
                                </li>
                                <li class="dropdown"><a href="#">Empresa</a>
                                    <ul class="submenu">
                                        <li><a href="empresa.php">Nosotros</a></li>
                                                       
                                         
                                        <li class="dropdown"><a href="servicios.php">Servicios</a>
										
                                        </li>
                                        <li><a href="portofolio.php">Portfolio</a></li>                 
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Productos</a>
                                    <ul class="submenu">
                                       <?php

							$query2="SELECT * FROM `subcategoria_poducto` ";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  {?>
									   <li><a href="productos.php?idsubcategoria=<?php echo $rs2['idsubcategoria'];?>"><?php echo utf8_encode($rs2['descripcion']);?></a></li>
										 <?php }?>
										
                                    </ul>
                                </li>
                               
                                
                                 
                                <li class="dropdown"><a href="contacto.php">Contacto</a>
                                     
                                </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Nav End-->
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pagina  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Empresa</a>
        </div>
    </div>
    
    <!--Tabs Section-->
    <section class="tabs-section">
    	<div class="auto-container">
        	<div class="row">
            	
                <div class="tabs-box clearfix">
                	
                    <!--Buttons Side-->
                    <div class="col-md-4 col-sm-6 col-xs-12 buttons-side">
                    	
                        <div class="sec-title">
                        	<h2 class="skew-lines">Perfecto <strong>Informatica</strong></h2>
                        </div>
                        <!--Tab Buttons-->
                        <ul class="tab-buttons
						
						  <?php

							$query2="select * from paginas where idpagina = 1 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>
					
						
                        	<li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><a href="#tab-one" class="tab-btn active-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4><?php echo utf8_encode($rs2['titulo']);?></h4></a></li>
<?php } ?>            </BR>                <?php

							$query2="select * from paginas where idpagina = 2 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>
						   <li class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><a href="#tab-two" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4><?php echo utf8_encode($rs2['titulo']);?></h4></a></li>
                       <?php } ?>                            <?php

							$query2="select * from paginas where idpagina = 3 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>     
							<li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms"><a href="#tab-three" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4><?php echo utf8_encode($rs2['titulo']);?></h4></a></li>
<?php } ?>                            <?php

							$query2="select * from paginas where idpagina = 4 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>                          
						  <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms"><a href="#tab-four" class="tab-btn clearfix"><div class="icon"><span class="flaticon-blank36"></span></div><h4><?php echo utf8_encode($rs2['titulo']);?></h4></a></li>
<?php } ?>                           

					  </ul>
                    </div>
                    
                    <!--Content Side-->
                    <div class="col-md-8 col-sm-6 col-xs-12 tabs-content clearfix">
                    	
                        <!--Tab / Active tab-->
						       <?php

							$query2="select * from paginas where idpagina = 1 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>     
                        <div class="tab active-tab" id="tab-one">
                            <div class="sec-title">
                                <h2><?php echo utf8_encode($rs2['titulo']);?><strong></strong></h2>
                            </div>
                            <div class="text">
                                <p><?php echo utf8_encode($rs2['descripcion']);?></p>
                            </div>
                            
                            <div class="link text-right"> </div>
                            
                        </div>
						
						<?php } ?>
                        
                        <!--Tab-->
                            <?php

							$query2="select * from paginas where idpagina = 2 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>     
                        <div class="tab" id="tab-two">
                            <div class="sec-title">
                                <h2><?php echo utf8_encode($rs2['titulo']);?><strong></strong></h2>
                            </div>
                            <div class="text">
                                <p><?php echo utf8_encode($rs2['descripcion']);?></p>
                            </div>
                            
                            <div class="link text-right"> </div>
                            
                        </div>
						
						<?php } ?>                        
                        <!--Tab-->
                            <?php

							$query2="select * from paginas where idpagina = 3 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>     
                        <div class="tab" id="tab-three">
                            <div class="sec-title">
                                <h2><?php echo utf8_encode($rs2['titulo']);?><strong></strong></h2>
                            </div>
                            <div class="text">
                                <p><?php echo utf8_encode($rs2['descripcion']);?></p>
                            </div>
                            
                            <div class="link text-right"> </div>
                            
                        </div>
						
						<?php } ?>                        
                        <!--Tab-->
                          <?php

							$query2="select * from paginas where idpagina = 4 order by idpagina";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>     
                        <div class="tab" id="tab-four">
                            <div class="sec-title">
                                <h2><?php echo utf8_encode($rs2['titulo']);?><strong></strong></h2>
                            </div>
                            <div class="text">
                                <p><?php echo utf8_encode($rs2['descripcion']);?></p>
                            </div>
                            
                            <div class="link text-right"> </div>
                            
                        </div>
						
						<?php } ?>
                        <!--Tab-->
                          
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Four Column / Team Section-->
    <section class="four-column team-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Nuestro  <strong>Equipo</strong></h2>
            </div>
                        
        	<div class="row clearfix">
            	 <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-3.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Gamaliel Gallagher</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Celular</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-1 ale.jpg" alt="" title="Volunteer"></a>
                            <div class="tag-title"></div>
                        </figure>
                        <div class="lower-part">
                        	<h3>Alejandro Antunez</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Celular</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="images/resource/team-1.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Junior Bobadilla</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Celular</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
               
                <!--Team Member-->
                
                
                
            
            
            </div>
        </div>
    </section>
    
    
    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            	<h2>Estas Listo para el cambio?</h2>
                <h3>no dudes en contactar con nosotros </h3>
                <div class="line"></div>
                <a class="theme-btn light-btn" href="#">Contactos</a>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Client Logos-->
    <section class="sponsors-section">
    	<div class="container">
        	<ul class="slider">
            	<?php

							$query2="select * from portofolio ";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>    
			
            	<li><a href="#"><img src="cms/images/<?php echo $rs2['logo']; ?>" alt="" title=""></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
    
    
    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
         
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">Copyright 2015 by <strong>Perfecto Informatica</strong> | Todos los Derechos Reservados</div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>