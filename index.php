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
    <header class="main-header fixed">
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
    
    <!-- Main Slider -->
    <section class="main-slider style-two default-banner">
    	
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    
					
					
					  <?php

							$query2="select * from slide_principal order by idslide";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  {?>
					
					
					
					
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="cms/images/<?php echo $rs2['imagen'];?>"  data-saveperformance="off"  data-title="Perfecto Informatica"> 
                    <img src="cms/images/<?php echo $rs2['imagen'];?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-24"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title with-bg"><h2><?php echo utf8_encode($rs2['titulo']);?></h2></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="32"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="title with-bg"><h4><?php echo utf8_encode($rs2['subtitulo']);?></h4></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="70"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="line"></div></div>
                    
                    </li>
                    <?php }?>
                    
                    
                    
                    
                </ul>
                
            	
            </div>
        </div>
    </section>
    
    
    
    <!--Tri Column Fluid-->
    <section class="tri-column-fluid">
    	<div class="tri-column-outer clearfix">
        	
            <!--Column-->
            <article class="column default-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    <h3>Perfecto Informatica</h3>
                    <h4>Misión</h4>
                    <div class="text">Experimentar la alegría del progreso y aplicar la tecnología en beneficio de las personas...</div>
                    <div class="text-right link"><a href="nosotros.php" class="theme-btn btn-style-one">Ver Más</a></div>
                </div>
            </article>
            
            <!--Carousel Column-->
            <article class="column carousel-column" style="background-image:url(images/background/carousel-bg.jpg);">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">
                	<h3>Perfecto Informatica</h3>
                    <h4>Visión</h4>
                    <div class="text">Nuestra visión representa nuestra mayor aspiración. Es nuestro propósito y nuestra razón de existir como empresa y se refleja en la historia que escribimos en todo el mundo...</div>
                    <div class="text-right link"><a href="nosotros.php" class="theme-btn btn-style-one">Ver Más</a></div>
                </div>
                
            </article>
            
            <!--Progress Column-->
            <article class="column progress-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    <h3>Servicios</h3>
                    <h2>Hosting, Sistemas Web, Sitios Web y aplicaciones moviles</h2>
                    <h3 class="museo-font">Utilizamos HTML5, CSS3, PHP y MySQL para el desarrollo de... </h3>
                    <br><br>
                    <div class="text-right link"><a href="servicios.php" class="theme-btn btn-style-two">Ver Más</a></div>
                </div>
            </article>
            
        </div>
    </section>
    
    <!--Two Column-->
    <section class="two-column no-padd-bottom">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Text Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="text-column">
                    	<div class="sec-title">
                        	<h2>Forma Parte de lo actual <strong> en el mundo</strong></h2>
                        </div>
                        <div class="text">
                        	<p>Sea parte de lo nuevo que se utiliza hoy en dia no espere <br> el momento es hoy y esta a solo un clic de distancia no lo dude más contacte con nosotros proveemos innovacion y tecnologia de punta.</p>
                        </div>
                        <br>
                        <div class="link text-right"><a href="contacto.php" class="theme-btn read-more"><span class="fa fa-angle-right"></span> &ensp;Leer Más</a></div>
                    </div>
                </div>
                
                <!--Video Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="responsive-video">
                    	<iframe height="170" allowfullscreen="" src="//player.vimeo.com/video/56999995?color=ffffff"></iframe>
                    </div>
                </div>
            
            
            </div>
        </div>
    </section>
    
    <!--Four Column / Current Projects-->
    <section class="four-column current-projects no-padd-top">
    	<div class="auto-container">
        	<div class="sec-title clearfix">
                <h2 class="pull-left">Nuestros Proyectos <strong>Recientes</strong></h2>
                <div class="link pull-right"><a href="#"><span class="fa fa-angle-right"></span> Ver Todos</a></div>
            </div>
                        
        	<div class="row clearfix">
            	
                <!--Project Column-->
				
				
				<?php

							$query2="select * from portofolio order by idportfolio limit 4";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar slide 1');

							while($rs2=mysql_fetch_array($recordset2))

					  {?>
					
				
				
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="cms/images/<?php echo $rs2['Screen_sitio_sistema_portada_270_x_186_px'];?>" alt="" title="Volunteer"></a>
                        	<div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                        </figure>
                        <div class="lower-part">
                        	<div class="text">
                            	<h3><?php echo utf8_encode($rs2['empresa']);?></h3>
                                <p><?php echo utf8_encode($rs2['titulo']);?></p>
                            </div>
                            <div class="proj-donation">
                            	<div class="info"><?php echo utf8_encode($rs2['detalle_sitio_sistema']);?> </div>
                                <div class="bar-outer">
                                	<div class="bar-inner" data-don-total="25000" data-don-received="25000"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
				
				<?php }?>
				
                <!--Project Column-->
                 
                 
            
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
                <a class="theme-btn light-btn" href="contacto.php">Contactos</a>
                
                
            </div>
        </div>
    </section>
	
	
	    <section class="price-plans">
    	<div class="auto-container">
            
            <div class="sec-title">
            	<h2>Planes <strong>y Precios </strong></h2>
            </div>
            
            <div class="row clearfix">
            	
                <!--Table Column-->
                
				<?php

							$query2="select * from planes ";

							$recordset2=mysql_query($query2,$con) or die('No se pudo consultar planes 1');

							while($rs2=mysql_fetch_array($recordset2))

					  { ?>
				
				<article class="col-md-3 col-sm-6 col-xs-12 table-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="table-inner">
                    	<div class="table-header">
                        	<h3><?php echo utf8_encode($rs2['titulo']);?></h3>
                        </div>
                        <div class="price-column price">
                            <h4 class="amount"><sup>Planes</sup><sub></sub></h4>
                        </div>
                        <div class="line"></div>
                        
                        <div class="list">
                            <ul>
                            	<li><?php echo utf8_encode($rs2['caracteristica1']);?></li>
                                <li><?php echo utf8_encode($rs2['caracteristica2']);?></li>
                                <li><?php echo utf8_encode($rs2['caracteristica3']);?></li>
                                <li><?php echo utf8_encode($rs2['caracteristica4']);?></li>
                                <li><?php echo utf8_encode($rs2['caracteristica5']);?></li>
                                                                
								</ul>
                        </div>
                        
                        <a href="contacto.php" class="signup hvr-bounce-to-right">Solicite ya <span class="icon flaticon-envelope32"></span></a>
                    </div>
                </article>
                <?php } ?> 
                <!--Table Column-->
                 
                <!--Table Column-->
                 
                <!--Table Column-->
                 
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
                        	<a href="#"><img src="images/resource/team-1 ale.jpg" alt="" title="Volunteer"></a>
                            <div class="tag-title"></div>
                        </figure>
                        <div class="lower-part">
                        	<h3>Alejandro Antunez</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Celular</strong> :  0991703915</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  <a href="mailto:aantunez@perfectoinformatica.com">aantunez@perfectoinformatica.com</a></p>
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
                        	<a href="#"><img src="images/resource/team-4.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Debora Gonzalez</h3>
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
                
                
            
            
            </div>
        </div>
    </section>
    
    <!--Our Programs-->
    
    
    
    <!--Fact Counter-->
     
    
    <!--Contact Us Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Contacte<strong>nos</strong></h2>
            </div>
            <div class="sec-text">
            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        	<div class="form">
        		
                <form id="contact-form" method="GET" action="sendemail.php">
                	<div class="row clearfix">
                    	<div class="form-group col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                <div class="field-outer">
                                    <input type="text" name="username" id="your-name" placeholder="Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
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
                            	<textarea name="message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                        	<button class="hvr-bounce-to-right" type="submit" name="submit-form">Enviar Mensaje &ensp; <span class="icon flaticon-envelope32"></span></button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-container" id="map-location"></div>
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
<script src="js/rev-plugins.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/jquery-parallax.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>