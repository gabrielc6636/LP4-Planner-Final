<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.html");
    exit;
}
$resultado = "";
$resultado = 'Bienvenido, '.$_SESSION['fname'].' '.$_SESSION['lname'];
?>
<!DOCTYPE html> 
<html> 
<head> 
<title>Academic Planner</title> 
<link href="styles/sesion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #D6D6D6;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #D6D6D6;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
<meta charset="utf-8">
</head> 
<body>
						<img alt="fondo" src="img/bg.png"  id="full-screen-background-image" />
<div id="head">
    	<div class="logoplanner">
    		<a href="user_page.php"><img src="img/logoplanner_small.png" /></a>
        </div>
        <div id="botonera">
                <div id='cssmenu'>
                    <ul>
                      
                       <li class='has-sub'><a href='#'><span>Registro</span></a>
                       		<ul>
                             <li><a href='user_page_materiasalta.php'><span>Materias</span></a></li>
                             <li class='last'><a href='user_page_diasalta.php'><span>Horario</span></a></li>
                          </ul>
                       </li>
                       <li class='has-sub'><a href='#'><span>Consulta</span></a>
                          <ul>
                             <li><a href='user_page_consulta.php'><span>Materias Aprobadas</span></a></li>
                             <li><a href='user_page_habilitadas.php'><span>Materias Pendientes</span></a></li>
							 <li><a href='user_page_academica.php'><span>Oferta Academica</span></a></li>
                             <li class='last'><a href='user_page_oferta.php'><span>Oferta Cursable</span></a></li>
                          </ul>
                       </li>
                       <li><a href='construccion.html'><span>Contacto</span></a></li>
                       <li class='has-sub last'><a href='#'><span>Alumno</span></a>
                          <ul>
                             <li><a href='construccion.html'><span>Mis Datos</span></a></li>
                             <li class='last'><a href='index.html'><span>Cerrar Sesi&#243;n</span></a></li>
                          </ul>
                       </li>
                    </ul>
                </div>
        </div>
    </div>
    
    
<div class="ss-form-container"> 
	<div class="ss-form-heading" align="justify" style="color:#666">
    	

   	  <p> Descarg&#225; la APK de Android para llevar Academic Planner con vos en tu celular.</p>
            
      
        <p> Descipci&#243;n: <br>
      La APK de Academic Planner consiste en una aplicacion &#250;til para celulares con sistema operativo Android. La misma te permite hacer consultas de tu historia acad&#233;mica, las materias aprobadas y las materias a las que estas habilitado/a a cursar. Adem&#225;s pod&#233;s ver el progreso de tu carrera y consultar la misma informaci&#243;n que la p&#225;gina de Academic Planner en cualquier lugar donde est&#233;s con tu Smartphone.<p>
   <p>Compatible con Android 2.3.6 en adelante</p>
        
        <div class="imagenes" align="center">
		        <a href="img/caps/android01.png"><img src="img/caps/android01.png" height="200" width="150"/>
                <a href="img/caps/android02.png"><img src="img/caps/android02.png" height="200" width="150"/>
                <a href="img/caps/android03.png"><img src="img/caps/android03.png" height="200" width="150"/>
        </div>
        
    	<h1 align="center" ><a style="color:#F60" href="planner.apk" >Descargar</a></h1> 
                
      <p>¿Problemas con la instalaci&#243;n del APK en Android? <a style="color:#F60" href="construccion.html">Clic aqu&#237;</a></p>
        <p> Sugerencias/Comentarios: <a style="color:#F60" href="construccion.html">Clic aqu&#237;</a></p>		
  </div>
</div>

	<div id="footer">
   	  <div style="float:right;margin-top: 5px;">
        	<a href="descarga.php"><img src="img/android_sitio.png" /></a>
        </div>
    </div>
    <div id="footer2" align="center" style="color:#CCCCCC;">
    	<p style="font-size:10px;margin:0;padding-top:8px;">Copyright&#169; 2014 - Todos los derechos reservados a Academic Planner</p>
    </div>
    
</body>
</html>