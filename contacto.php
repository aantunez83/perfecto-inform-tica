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
        	Pagina  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Contacto</a>
        </div>
    </div>
    
    <!--Contact Us Section-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	
            <div class="row clearfix">
                
                <div class="col-md-9 col-sm-6 col-xs-12">
                    <section class="contact-section">
                        <div class="sec-title">
                            <h2>Contacte<strong>nos</strong></h2>
                        </div>
                            
                        <!--Map Area-->
                        <div class="map-section">
                            <div class="map-container" id="map-location"></div>
                        </div>
                        <br>
                        
                        <div class="form">
                            
                            <form id="contact-form" method="GET" action="sendemail.php">
                                <div class="row clearfix">
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="username" id="your-name" placeholder="Su Nombre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                                            <div class="field-outer">
                                                <input type="email" name="email" id="your-email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-subject"><span class="icon flaticon-edition2"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="subject" id="your-subject" placeholder="Asunto">
												
												<input type="hidden" name="para" value="<?php echo $rs5['email'];?>">
												
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <textarea name="message" placeholder="Su Mensaje"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Enviar Mensaje &ensp; <span class="icon flaticon-envelope32"></span></button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    
                    </section>
                </div>
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                        <!-- Search Form -->
                        
                        
                        <!-- Contact Information -->
                        <div class="widget contact-info">
                        	<div class="sec-title"><h3>Informaci&oacute;n de<strong> contacto</strong></h3></div>
                            <div class="text">Datos de la Empresa</div>
                            <ul class="info">
                                <li><strong>Email</strong> <a href="mailto:<?php echo utf8_encode($rs5['email']); ?>"><?php echo utf8_encode($rs5['email']); ?></a></li>
                                <li><strong>Telefono</strong> <?php echo utf8_encode($rs5['telefono']); ?></li>
                                <li><strong>Celular</strong> <?php echo utf8_encode($rs5['celular']); ?></li>
                                <li><strong>Sitio Web</strong> <a href="http://www.perfectoinformatica.com">http://www.perfectoinformatica.com</a></li>
                            </ul>
                        </div>
                                
                    </aside>
                
                    
                </div>
                <!--Sidebar-->
                
            </div>
        </div>
    </div>
    
    
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
<script src="js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>