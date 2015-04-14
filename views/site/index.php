<?php
/* @var $this yii\web\View */
$this->title = 'EZPORTO - TIENDA DEPORTIVA';
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/EZPORTO.png">
<title>EZPORTO</title>

<!-- Bootstrap core CSS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/navbar-fixed-top.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js" type="text/javascript"></script>

<link href="css/carousel.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href="css/wrapper_menu.css" rel="stylesheet">



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript">
	jQuery(document).ready(function() {
		$(".dropdown").hover(function() {
			$('.dropdown-menu', this).fadeIn("fast");
		}, function() {
			$('.dropdown-menu', this).fadeOut("fast");
		});
	});
</script>
</head>

<body
	style='pointer-events: auto;
	 background:
	  url(http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-SwedenB2C-Site/Stadium/sv_SE/stadium/images/Diverse/Banners/Sneakermania_start_bakgrund.jpg) 50% 0% no-repeat;'>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="?r=site/construction"> <img
					src="images/EZPORTO.png" width="127px" height="25px"
					alt=""> </a>
                    
                    
                     </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">        
        <li style="padding: 9px 0px;">
          <input type="text"
						class="form-control" placeholder="Buscar...">
        </li>
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</nav>

<!-- menu de clategorias -->

<div class="navbar-inner">
  <div class="container" > 
    
    <!-- Mobile toggle button
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>  --> 
    
    <!-- Logo --> 
    
    <!-- Navigation -->
    <nav class="nav-collapse collapse" style="display: flex">
      <ul class="nav" style="display: flex; margin: -9px 150px 0px 65px;">
      	<!--  menu deportes -->
        <li class="dropdown"><a href="?r=site/construction" class="dropdown-toggle"
						data-toggle="dropdown">Hombre<b class="caret"></b> </a>
          <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Zapatos</li>                
                <li><a href="?r=hombres/zhentrenamiento">Entrenamiento &emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres/zhrunning">Running</a></li>
                <li><a href="?r=hombres/zhcamping">Camping/Monta&ntilde;ismo</a></li>
                <li><a href="?r=hombres/zhfutbol">F&uacute;tbol &emsp;&emsp;&emsp;&emsp; </a></li>
                <li><a href="?r=hombres/zhbaloncesto">Baloncesto &emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres/zhbaseball">Baseball &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres/zhtennis">Tennis &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres/zhciclismo">Ciclismo &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres/zhestilodeportivo">Estilo Deportivio</a></li>
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Ropa</li>                
                <li><a href="?r=hombres-ropa/rhcamisetas">Camisetas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhcamisillas">Camisillas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhbusos">Busos & Camibusos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhchaquetas">Chaquetas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhsudaderas">Sudaderas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>    
                <li><a href="?r=hombres-ropa/rhpantalonetas">Pantalonetas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>    
                <li><a href="?r=hombres-ropa/rhpantalones">Pantalones & Licras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>             
                <li><a href="?r=hombres-ropa/rhconjuntos">Conjuntos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhtbano">Trajes de Ba&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-ropa/rhcamequipo">Camisetas de Equipos</a></li>
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Accesorios</li>                
                <li><a href="?r=hombres-accesorios/acchbolsos">Bolsos & Ri&ntilde;oneras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-accesorios/acchgorras">Gorras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-accesorios/acchmedias">Medias</a></li>                
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Deportes</li>                
                <li><a href="?r=hombres-deportes/dephfutbol">F&uacute;tbol &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephbaloncesto">Baloncesto &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephbaseball">Baseball &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephrunning">Running &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephrugby">Rugby &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephtennis">Tennis &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephciclismo">Ciclismo &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephnatacion">Nataci&oacute;n &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephgolf">Golf &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephpatinaje">Patinaje &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=hombres-deportes/dephartmarciales">Artes Marciales &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>   
                <li><a href="?r=hombres-deportes/dephcamping">Camping / Monta&ntilde;ismo</a></li>             
              </ul>
            </li>
          
          </ul>
          <!-- dropdown-menu -->
        </li>
        <!-- fin  menu deportes -->
        <!-- menu de ropa-->
        <li class="dropdown"><a href="?r=site/construction" class="dropdown-toggle"
						data-toggle="dropdown"> Mujer <b class="caret"></b> </a>
          <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Zapatos</li>                
                <li><a href="?r=mujeres/zmentrenamiento"> Entrenamiento &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres/zmrunning">Running &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres/zmcamping">Camping / Monta&ntilde;ismo</a></li>
                <li><a href="?r=mujeres/zmfutbol">F&uacute;tbol &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres/zmtennis">Tennis &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres/zmestilodeportivo">Estilo Deportivo</a></li>                
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Ropa</li>                
                <li><a href="?r=mujeres-ropa/rmtop">Tops / Brasier / Sujetadores</a></li>
                <li><a href="?r=mujeres-ropa/rmfaldas">Faldas & Vestidos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmshorts">Shorts &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmpantalones">Pantalones & Licras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmsudaderas">Sudaderas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmtbano">Trajes de Ba&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>              
                <li><a href="?r=mujeres-ropa/rmconjuntos">Conjuntos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmcamisas">Camisas &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-ropa/rmchaquetas">Chaquetas</a></li>
                
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Accesorios</li>                
                <li><a href="?r=mujeres-accesorios/accmbolsos">Maletas & Bolsos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-accesorios/accmrinoneras">Ri&ntilde;oneras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-accesorios/accmgorras">Gorras & Viseras &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-accesorios/accmmedias">Medias &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-accesorios/accmcintillos">Cintillos</a></li>                
              </ul>
             </li>
             <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Deportes</li>                
                <li><a href="?r=mujeres-deportes/depmentrenamiento">Entrenamiento &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-deportes/depmrunning">Running &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-deportes/depmtennis">Tennis &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-deportes/depmyoga">Yoga &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-deportes/depmnatacion">Nataci&oacute;n &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=mujeres-deportes/depmcamping">Camping / Monta&ntilde;ismo</a></li>                              
              </ul>
             </li>
          </ul>
          <!-- dropdown-menu -->
        </li>
        <!-- fin menu de ropa-->
        <!-- /.dropdown -->
        
        <!-- menu de zapatos -->
        <li class="dropdown"><a href="?r=site/construction" class="dropdown-toggle"
						data-toggle="dropdown"> Ni&ntilde;os <b class="caret"></b> </a>
          <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">BEBES (0 - 4 A&ntilde;OS)</li>                
                <li><a href="?r=site/construction">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Calzado &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Accesorios</a></li>                
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">NI&ntilde;OS ( 4 - 8 A&ntilde;OS)</li>                
                <li><a href="?r=site/construction">Ropa de Ni&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Ropa de Ni&ntilde;a &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Calzado de Ni&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Calzado de Ni&ntilde;a &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Accesorios</a></li>               
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">NI&ntilde;OS Y JOVENES ( 8 - 14 A&ntilde;OS)</li>                
                <li><a href="?r=site/construction">Ropa de Ni&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Ropa de Ni&ntilde;a &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Calzado de Ni&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Calzado de Ni&ntilde;a &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Accesorios</a></li> 
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Deportes</li>                
                <li><a href="?r=site/construction">F&uacute;tbol &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Baloncesto &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=site/construction">Nataci&oacute;n &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li> 
                <li><a href="?r=site/construction">Tennis &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=site/construction">Patineta</a></li>                               
              </ul>
             </li>
          </ul>
          <!-- dropdown-menu -->
        </li>
        <!-- fin menu zapatos -->
        
        <!-- menu catalogo de marcas -->
        <li class="dropdown"><a href="?r=site/construction" class="dropdown-toggle"
						data-toggle="dropdown"> Deportes <b class="caret"></b> </a>
          <ul class="dropdown-menu mega-menu">
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">F&uacute;tbol</li>                
                <li><a href="?r=deportes-futbol/fdepguayos">Guayos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-futbol/fdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-futbol/fdepaccesorios">Accesorios &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li> 
                <li><a href="?r=deportes-futbol/fdepselcolombia">Selecci&oacute;n Colombia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>          
                <li><a href="?r=deportes-futbol/fdepuniformes">Uniformes de Equipos</a></li>       
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Running</li>                
                <li><a href="?r=deportes-running/rndepzapatos">Zapatos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-running/rndepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-running/rndepaccesorios">Accesorios &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>                
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Baloncesto</li>                
                <li><a href="?r=deportes-baloncesto/baldepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-baloncesto/baldepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-baloncesto/baldepaccesorios">Accesorios</a></li>               
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Entrenamiento</li>                
                <li><a href="?r=deportes-entrenamiento/entdepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-entrenamiento/entdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-entrenamiento/entdepaccesorios">Accesorios &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-entrenamiento/entdepgym">Gym</a></li>                  
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Tennis</li>                
                <li><a href="?r=deportes-tennis/tndepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-tennis/tndepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-tennis/tndepaccesorios">Accesorios</a></li>               
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">B&aacute;dminton</li>                
                <li><a href="?r=deportes-badminton/badepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-badminton/badepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-badminton/badepaccesorios">Accesorios</a></li>               
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Acuaticos</li>                
                <li><a href="?r=deportes-acuaticos/acdeptbano">Trajes de Ba&ntilde;o &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>                
                <li><a href="?r=deportes-acuaticos/acdepaccesorios">Accesorios &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>               
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Golf</li>                
                 <li><a href="?r=deportes-golf/glfdepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-golf/glfdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-golf/glfdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Baseball</li>                
                 <li><a href="?r=deportes-baseball/bsbdepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-baseball/bsbdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-baseball/bsbdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Ciclismo</li>                
                 <li><a href="?r=deportes-ciclismo/cicldepzapatos">Zapato &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-ciclismo/cicldepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-ciclismo/cicldepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Patinaje</li>                
                 <li><a href="?r=deportes-patinaje/patdeppatines">Patines &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>  
                <li><a href="?r=deportes-patinaje/patdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-patinaje/patdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Artes Marciales</li>                 
                <li><a href="?r=deportes-art-marciales/artdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-art-marciales/artdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
             <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Rugby</li>
                <li><a href="?r=deportes-rugby/rbdepzapatos">Zapatos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>                 
                <li><a href="?r=deportes-rugby/rbdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-rugby/rbdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
            <li class="mega-menu-column">
              <ul>
                <li class="nav-header">Extremos</li>                 
                <li><a href="?r=deportes-extremos/extdepzapatos">Zapatos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-extremos/extdepropa">Ropa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><a href="?r=deportes-extremos/extdepaccesorios">Accesorios</a></li>                   
              </ul>
            </li>
          </ul>
          <!-- dropdown-menu -->
        </li>
        <!-- fin menu catalogo de marcas -->
        <!--<li><a href="#team">Our Team</a></li>
        <li><a href="#contact">Contact</a></li>-->
      </ul>
      <!-- /.nav --> 
    </nav>
    <!--/.nav-collapse --> 
    
  </div>
  <!-- /.container --> 
</div>
<!-- /.nav-inner --> 

<!-- fin menu categorias --> 

<!-- Carousel
carrusel de imagenes de portada
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <img class="first-slide"
					src="images/150306-start-zpump-sv-2.jpg" alt="First slide"> </div>
    <div class="item"> <img class="second-slide"
					src="images/150309-start-Essentials-sv.jpg"
					alt="Second slide"> </div>
    <div class="item"> <img class="third-slide"
					src="images/adi_Stadium_se_Stellasport_banner_1024x600_CTA.jpg"
					alt="Third slide"> </div>
    <div class="item"> <img class="third-slide" src="images/gimlet-sv-NY.jpg"
					alt="Third slide"> </div>
    <div class="item"> <img class="third-slide"
					src="images/nike-for-her-JDI-weekend-1024x600.jpg"
					alt="Third slide"> </div>
    <div class="item"> <img class="third-slide"
					src="images/PA6710_40402_Stadium-Online_Bolt_Running_1024x600px.jpg"
					alt="Third slide"> </div>
    <div class="item"> <img class="third-slide"
					src="images/stadium-1024x600-2.png" alt="Third slide"> </div>
    <div class="item"> <img class="third-slide"
					src="images/ultra-boost-stadium-1024x600.png"
					alt="Third slide"> </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
</div>
<!-- /.carousel --> 
<!-- /container --> 

<!-- tabla inntermedia -->
<div class="bannertext"> <span style="text-transform: uppercase; font-weight: bold;"></span> <br>
  <table width="1024" border="0" cellspacing="10" cellpadding="0"
			bgcolor="#000000"
			style="width: 959px;
			 border-width: 0px;
			 background-color: #060606; display: table;
			 border-color: #808080; border-spacing: 1px; margin: 0px -145px; border-collapse: separate;">
    <tbody>
      <tr>
        <td align="center" width="330"><font size="4" color="#ffffff"><b>Tienda
          Online</b> </font></td>
        <td align="center" width="330"><font size="4" color="#ffffff"><b>Envio
          gratis</b> </font><br></td>
        <td align="center" width="330"><font size="4"><b> <font
								color="#ffffff"> &nbsp;2-4 entrega de días </font></b> </font></td>
      </tr>
    </tbody>
  </table>
  <br>
</div>
<!-- fin tabla inntermedia -->
</div>
<!-- contenido intermedio -->
<div class="?r=site/construction">
  <div class="ContentArea"
			style="margin-right: 12px !important; margin-left: 48px !important; width: 100%; margin-top: -38px; margin-bottom: 10px; overflow: hidden;">
    <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
      <table cellpadding="0" cellspacing="0" style="width: 20px;">
        <tbody>
          <tr>
            <td><img style="margin: 0% 0% 0% 17%;"
								src="images/150310-produktlist.jpg"
								alt="150219-productlist-sneakermania-1"></td>
          </tr>
          <tr>
            <td><div style="float: left; margin: 0px 0px 0px 17%;"> <span style="text-transform: uppercase; font-weight: bold;"></span> <br>
                <br>
                <table width="930px">
                  <tbody>
                    <tr>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/damskor/sneakers/142193/converse-all-star-hi?SelectedProductUUID=n_cKd3emgfkAAAE782ky8qt7#.VPa9CbPF-dw"> <img id="prod_thumb" title="CONVERSE" class="prod_thumb"
														src="images/142193.jpg" alt=""> <br>
                        <strong>CONVERSE</strong>
                        <div style="text-align: center;"> <span class="name">ALL STAR HI</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/skor/damskor/sneakers/142193/converse-all-star-hi?SelectedProductUUID=n_cKd3emgfkAAAE782ky8qt7#.VPa9CbPF-dw"> <strong> <font color="#000000">699:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/varumarken/adidas/originals/214589/adidas-u-superstar?SelectedProductUUID=XarCROinfy4AAAFJ3Qd0y6ac#.VP1tXmTF-dw"> <img id="prod_thumb" title="ADIDAS" class="prod_thumb"
														src="images/214589.jpg" alt=""> <br>
                        <strong>ADIDAS</strong>
                        <div style="text-align: center;"> <span class="name">U SUPERSTAR</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/varumarken/adidas/originals/214589/adidas-u-superstar?SelectedProductUUID=XarCROinfy4AAAFJ3Qd0y6ac#.VP1tXmTF-dw"> <strong> <font color="#000000">899:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/damskor/sneakers/209056/palladium-u-blanc-hi?SelectedProductUUID=mrjCROinPCQAAAFE1TVYoNfE#.VQL73GTF-dw"> <img id="prod_thumb" title="CONVERSE" class="prod_thumb"
														src="images/209056.jpg" alt=""> <br>
                        <strong>PALLADIUM</strong>
                        <div style="text-align: center;"> <span class="name">U BLANC HI </span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/skor/damskor/sneakers/209056/palladium-u-blanc-hi?SelectedProductUUID=mrjCROinPCQAAAFE1TVYoNfE#.VQL73GTF-dw"> <strong> <font color="#000000">699:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/damskor/sneakers/218869/converse-u-all-star-specialty-ox?SelectedProductUUID=BGfCROin9N0AAAFLaFkZPKSB#.VQL6QWTF-dw"> <img id="prod_thumb" title="CONVERSE" class="prod_thumb"
														src="images/218869.jpg" alt=""> <br>
                        <strong>CONVERSE</strong>
                        <div style="text-align: center;"> <span class="name">U ALL STAR SPECIALTY OX</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/skor/damskor/sneakers/218869/converse-u-all-star-specialty-ox?SelectedProductUUID=BGfCROin9N0AAAFLaFkZPKSB#.VQL6QWTF-dw"> <strong> <font color="#000000">799:-</font> </strong> </a> </div></td>
                    </tr>
                  </tbody>
                </table>
                <br>
              </div></td>
          </tr>
        </tbody>
      </table>
    </dl>
    <div id="container-img" style="margin: 55px 0% 0% 7%;">
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px; margin-left: 73px;">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/is-bin/INTERSHOP.enfinity/WFS/Stadium-SwedenB2C-Site/sv_SE/-/SEK/cc_Factfinder-SimpleOfferSearch?Query=vansoffer&amp;invisible_field=findSimple"
								title="150312-start-large-vans-20off"> <img
									src="images/150306-start-large-Vans20off-sv.jpg"
									border="0" alt="150312-start-large-vans-20off"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px;">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/is-bin/INTERSHOP.enfinity/WFS/Stadium-SwedenB2C-Site/sv_SE/-/SEK/cc_Factfinder-SimpleOfferSearch?Query=Reima&amp;invisible_field=findSimple"
								title="150312-start-large-reima-20off"> <img
									src="images/150306-start-large-Reima20off-sv.jpg"
									border="0" alt="150312-start-large-reima-20off"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
      </div>
      <div id="container-img" style="margin: 55px 0% 0% 7%;">
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px; margin-left: 73px;">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/is-bin/INTERSHOP.enfinity/WFS/Stadium-SwedenB2C-Site/sv_SE/-/SEK/cc_Factfinder-SimpleOfferSearch?Query=KOZI+KIDZ"
								title="150310-start-large-kozikidz"> <img
									src="images/150310-start-large-kozikidz-se.jpg"
									border="0" alt="150310-start-large-kozikidz"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px; margin-left:-1px">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/is-bin/INTERSHOP.enfinity/WFS/Stadium-SwedenB2C-Site/sv_SE/-/SEC/cc_Factfinder-SimpleOfferSearch?Query=niketrainoffer&amp;invisible_field=findSimple"
								title="150312-start-large-nike-training-20off"> <img
									src="images/150306-start-large-Nike-train-20off-sv.jpg"
									border="0" alt="150312-start-large-nike-training-20off"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
      </div>
      <div id="container-img" style="margin: 55px 0% 0% 7%;">
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px; margin-left: 73px;">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/sport/cykel/cyklar#sort_attribute_1=ClickCount"
								title="150313-start-large-cyklar"> <img
									src="images/150313-start-large-cyklar-se.jpg"
									border="0" alt="150313-start-large-cyklar"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px; margin-left:-1px">
          <tbody>
            <tr>
              <td><a
								href="http://www.stadium.se/om-stadium/vart-ansvar/race-marine-essentials"
								title="150305-start-large-ESSENTIALS"> <img
									src="images/150225-start-large-essentials-se-2.jpg"
									border="0" alt="150305-start-large-ESSENTIALS"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
    </div>
    <div id="container-banner3" style="margin:150px">
    <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
      <table cellpadding="0" cellspacing="0" style="width: 20px; ">
        <tbody>
          <tr>
            <td><img
								src="images/150219-list-springnews-sv-2.jpg"
								alt="150219-productlist-sneakermania-3"></td>
          </tr>
          <tr>
            <td><div class="bannertext" style="margin: -78px auto 0px auto;"> <span style="text-transform: uppercase; font-weight: bold;"></span> <br>
                <br>
                <table width="994px">
                  <tbody>
                    <tr>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/damskor/sneakers/214308/adidas-u-stan-smith?SelectedProductUUID=VrvCROinDo8AAAFJEvgSrfj_"> <img id="prod_thumb" title="ADIDAS" class="prod_thumb"
														src="images/214308.jpg" alt=""> <br>
                        <strong>ADIDAS</strong>
                        <div style="text-align: center;"> <span class="name">U STAN SMITH</span> </div>
                        <span class="price"> </span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/skor/damskor/sneakers/214308/adidas-u-stan-smith?SelectedProductUUID=VrvCROinDo8AAAFJEvgSrfj_"> <strong><font color="#000000">799:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/damskor/sneakers/213909/nike-w-son-of-force?SelectedProductUUID=VNbCROinIEkAAAFKZw9NvzbT#.VPmfKGTF-dw"> <img id="prod_thumb" title="NIKE" class="prod_thumb"
														src="images/213909.jpg" alt=""> <br>
                        <strong>NIKE</strong>
                        <div style="text-align: center;"> <span class="name">W SON OF FORCE</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/skor/damskor/sneakers/213909/nike-w-son-of-force?SelectedProductUUID=VNbCROinIEkAAAFKZw9NvzbT#.VPmfKGTF-dw"> <strong> <font color="#000000">599:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/varumarken/reebok/skor/214659/reebok-w-princess?SelectedProductUUID=o7nCROinTtkAAAFLKSUDsS39#.VPbVHrPF-dw"> <img id="prod_thumb" title="REEBOK" class="prod_thumb"
														src="images/214659.jpg" alt=""> <br>
                        <strong>REEBOK</strong>
                        <div style="text-align: center;"> <span class="name">W PRINCESS</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <a class="prod-thumb-link"
															href="http://www.stadium.se/varumarken/reebok/skor/214659/reebok-w-princess?SelectedProductUUID=o7nCROinTtkAAAFLKSUDsS39#.VPbVHrPF-dw"> <strong> <font color="#000000">599:-</font> </strong> </a> </div></td>
                      <td style="text-align: center;"><a
													class="prod-thumb-link"
													href="http://www.stadium.se/skor/herrskor/sneakers/214779/converse-u-all-star-mono-lth-ox?SelectedProductUUID=EiHCROinqlEAAAFJ49AbgOSc#.VPmsPGTF-dw"> <img id="prod_thumb" title="CONVERSE" class="prod_thumb"
														src="images/214779.jpg" alt=""> <br>
                        <strong>CONVERSE</strong>
                        <div style="text-align: center;"> <span class="name">U ALL STAR MONO LTH OX</span> </div>
                        <span class="price"></span> </a>
                        <div style="text-align: center;"> <b>999:-</b> </div></td>
                    </tr>
                  </tbody>
                </table>
                <br>
              </div></td>
          </tr>
        </tbody>
      </table>
    </dl>
    </div>
    <div id="container-banner" style="margin:150px">
      <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
        <table cellpadding="0" cellspacing="0" style="width: 20px;">
          <tbody>
            <tr>
              <td><a href="http://www.stadium.se/varumarken/utforsaljning"
								title="141028-start-wide-utförsäljning"> <img
									src="images/141028-stsrt-wide-sale-2.jpg" border="0"
									alt="141028-start-wide-utförsäljning"> </a></td>
            </tr>
          </tbody>
        </table>
      </dl>
    </div>
    <dl class="tips" cssname=""
				style="display: inline; float: left; margin-right: 15px; margin-bottom: 12px; position: relative;">
      <table cellpadding="0" cellspacing="0" style="width: 20px;">
        <tbody>
          <tr>
            <td><a href="?r=site/construction" title="130319-garanterat-nöjd"> <img
		                            style="margin-left: 133px;"
									src="images/110314-gradient-listee2.jpg" border="0"
									alt="130319-garanterat-nöjd"> </a></td>
          </tr>
          <tr>
            <td><div class="bannertext" style="margin: -15px auto 0px 178px;"> <span style="text-transform: uppercase; font-weight: bold;"></span> <br>
                <table width="985" border="0" cellspacing="0" cellpadding="10"
										bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td align="left"><img
													src="http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-Site/Stadium/sv_SE/stadium/images/Diverse/garanterat-nojd/aktivt-liv3.jpg"
													width="315" alt=""></td>
                      <td align="left"><img
													src="http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-Site/Stadium/sv_SE/stadium/images/Diverse/garanterat-nojd/garanterat-nojd.jpg"
													alt=""></td>
                      <td align="left" colspan="2"><img
													src="http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-Site/Stadium/sv_SE/stadium/images/Diverse/garanterat-nojd/shop-stadium-se3.jpg"
													alt=""></td>
                    </tr>
                    <tr>
                      <td valign="top">Hemos decidido. Todo el mundo debería tener la
                         con una vida activa. Por lo tanto, siempre es muy bueno
                         precios en los zapatos, ropa y todo lo demás en el deporte y
                         moda deportiva, cubierto con las características adecuadas, de buena calidad y la
                         últimos diseños. Así que siempre obtener el máximo por su dinero
                         con nosotros. En cada rango de precios.&nbsp; <br>
                        <br>
                        Bienvenidos a una tienda de deportes en plena forma! </td>
                      <td valign="top">Con nosotros, usted es siempre seguro y
                         simplemente, al mejor precio. Usted estará satisfecho, simplemente. puede
                         en realidad nos garantizamos. <br>
                        <a
													href="#"> <u> <b> Läs mer här. </b> </u> </a> <br>
                        <br>
                        <b>- Mejor bono de deportes hasta de 
                         10% <br>
                        
- Apoye a su club - bono a todos!
                         - Satisfacción garantizada - Running Shoes
                         - Abierta
                         365 días <br>
                        - Garantía de precio </b></td>
                      <td valign="top" width="230"><img
													src="http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-Site/Stadium/sv_SE/stadium/images/Diverse/garanterat-nojd/delivery.jpg"
													alt=""> <br>
                        <br>
                        <b> 
						- Envío gratis a
                         tienda * <br>
                        
						- Envío gratis a más de 500: - *&nbsp; </b> <b><br>
                        - Carga pesada 399: -<br>
                        </b><b>
						- 365
                         días de compra</b><br>
                        <b>- Retorno de la
                         tienda&nbsp; <br>
                        </b>
						* No se aplica a las mercancías pesadas</td>
                      	<td valign="top" width="150"><img
													src="http://www.stadium.se/is-bin/intershop.static/WFS/Stadium-Site/Stadium/sv_SE/stadium/images/Diverse/garanterat-nojd/betalning.jpg"
													alt=""> <br>
                        <br>
                        <b>- Klarna
                        factura&nbsp; <br>
                        
						- El banco directo<br>
                        - Mapa </b></td>
                    </tr>
                  </tbody>
                </table>
                <br>
              </div></td>
          </tr>
        </tbody>
      </table>
    </dl>
  
</div>
<!--fin contenido intermedio -->


<!-- footer -->
<div id="footer" >
  <table style="margin: 0px 191px; background-color:gray" bgcolor="#737373"  border="0" cellpadding="0" cellspacing="0" width="1024">
    <tbody>
      <tr>
        <td colspan="8" height="20" valign="top"></td>
      </tr>
      <tr>
        <td colspan="8" align="center" valign="top" width="1024"><img src="images/white-line-footer.jpg"></td>
      </tr>
      <tr>
        <td colspan="8" height="10" valign="top"></td>
      </tr>
      <tr>
        <td width="55"></td>
        <td align="left" valign="center"><font color="#ffffff" size="2"><img src="images/questionmark.png" height="17" width="17"><b> 
SERVICIO AL CLIENTE</b> <br>
          </font></td>
        <td align="left"><font color="#ffffff" size="2"><img src="images/man.png" height="17" width="17"><b> MIEMBROS</b> <br>
          </font></td>
        <td align="left"><font color="#ffffff" size="2"><img src="images/bubbla.png" height="17" width="17"><b> 
OTRAS</b> <br>
          </font></td>
        <td align="left"><font color="#ffffff" size="2"><img src="images/runman.png" height="17" width="17"><b> SÍGUENOS:</b> <br>
          </font></td>
        <td align="left" valign="bottom"><font color="#ffffff" size="2"><img src="images/shopping-cart.png" height="17" width="17"><b> SHOP ONLINE</b><br>
          </font></td>
        <td align="left" valign="bottom"><font color="#ffffff" size="2"><img src="images/info2.png" height="17" width="17"><b> EMPRESA</b><br>
          </font></td>
        <td width="15"></td>
      </tr>
      <tr>
        <td width="15"></td>
        <td align="left" valign="top" width="165"><font color="#AAA;" size="2"><a href="#"><font size="2" style="color:#AAA;">PREGUNTAS Y RESPUESTAS</font></a> <br>
          <a href="#" style="color:#AAA;">
CONTÁCTENOS</a> </font></td>
        <td align="left" valign="top" width="165"><font color="#ffffff" size="2"><a href="#" rel="nofollow" style="color:#AAA;">MI SITIO</a> <br>
          <a href="#" rel="nofollow" style="color:#AAA;">
Inscríbase hoy mismo!</a> <br>          
          <a href="#" rel="nofollow" style="color:#AAA;">MEDLEMSPRISER</a></font></td>
        <td align="left" valign="top" width="165"><font color="#ffffff" size="2"><a href="#" rel="nofollow" style="color:#AAA;">EQUIPO DE VENTAS</a> <br>
          <a href="#" rel="nofollow" style="color:#AAA;">SPORTSCAMP</a><br>
          <a href="#" rel="nofollow" style="color:#AAA;">EZPORTO OUTLET</a></font></td>
        <td align="left" valign="top" width="165"><font color="#ffffff" size="2"><font color="#ffffff"><a href="#" target="_blank" style="color:#AAA;">FACEBOOK</a> <br>
          <font size="2"><a href="#" rel="nofollow" target="_blank" style="color:#AAA;">YOUTUBE</a><br>
          <font size="2"><a href="#" target="_blank" style="color:#AAA;">INSTAGRAM</a></font></font></font></font></td>
        <td align="left" valign="top" width="165"><div><font size="2"><font size="2"><font color="#ffffff" size="2"><a href="#" rel="nofollow" style="color:#AAA;" target="_self">ofertas de paquetes</a></font><br>
            <font color="#ffffff" size="2"><a href="#" rel="nofollow" target="_self" style="color:#AAA;">
CONDICIONES DE USO</a><br>
            <a href="#" rel="nofollow" target="_self" style="color:#AAA;">ASISTENTES</a><br>
            <a href="#" rel="nofollow" target="_self" style="color:#AAA;">LIQUIDACIÓN</a></font></font></font></div></td>
        <td align="left" valign="top" width="165"><div><font size="2"><font size="2"><font color="#ffffff" size="2"><font color="#ffffff" size="2"><a href="#" rel="nofollow" target="_self" style="color:#AAA;">NUESTRAS TIENDAS</a></font><br>
            <font color="#ffffff" size="2"><a href="#" rel="nofollow" target="_self" style="color:#AAA;">ACERCA DE EZPORTO</a><br>
            <a href="#" rel="nofollow" target="_blank" style="color:#AAA;">PRENSA CONTACTO</a><br>
            <a href="#" rel="nofollow" target="_blank" style="color:#AAA;">CARRERA</a><br>
            <a href="#" rel="nofollow" target="_self" style="color:#AAA;">
NUESTRA RESPONSABILIDAD</a></font></font></font></font></div></td>
      </tr>
    </tbody>
  </table>
  <table style="margin: 0px 191px; background-color:gray" bgcolor="#737373" border="0" cellpadding="0" cellspacing="0" width="1024">
    <tbody>
      <tr>
        <td colspan="8" height="20" valign="top"></td>
      </tr>
      <tr>
        <td colspan="8" align="center" valign="top" width="1024"><img src="images/white-line-footer.jpg"></td>
      </tr>
      <tr>
        <td colspan="8" height="10" valign="top"></td>
      </tr>
      <tr align="center" valign="middle">
        <td colspan="8" align="center" valign="middle"><font color="#ffffff" size=" 2"><a href="#"><img src="images/colombia.png"></a> </font><font color="#ffffff" size=" 2"> &nbsp; | &nbsp; <font color="#ffffff" size=" 2">Calle 23 # 1 a 99, Medellín, Antioquia, Colombia &nbsp;</font> |<font color="#cccccc" size=" 2"> &nbsp; &nbsp; <a href="#" style="color:#AAA;">Sitemap</a></font> |<font color="#cccccc" size=" 2"> &nbsp; &nbsp; <a href="#" style="color:#AAA;">Cookies</a></font> </font></td>
      </tr>
      <tr>
        <td colspan="8" height="10" valign="top"></td>
      </tr>
      <tr>
        <td colspan="8" align="center" valign="top" width="1024"><img src="images/white-line-footer.jpg"></td>
      </tr>
      <tr>
        <td colspan="8" height="80" valign="top"></td>
      </tr>
    </tbody>
  </table>
  <script>
			var cookieInfoOpener = document.getElementById('cookieInfoOpener');
			if(cookieInfoOpener){
				cookieInfoOpener.href = "#";
			}
		</script> 
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"
		type="text/javascript"></script> 
<script src="../../dist/js/bootstrap.min.js" type="text/javascript"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="../../assets/js/ie10-viewport-bug-workaround.js"
		type="text/javascript"></script>
</body>
</html>
