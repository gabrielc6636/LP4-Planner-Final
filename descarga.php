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
                             <li><a href='user_page_oferta.php'><span>Materias Ofertadas</span></a></li>
                             <li class='last'><a href='user_page_habilitadas.php'><span>Materias Habilitadas</span></a></li>
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
	<div class="ss-form-heading" align="center">
    	<p> Descarga la APK de Android para llevar Academic Planner con vos en tu celular</p>
            
      
        <p> Descipcion: <br>
        La APK de Academic Planner consiste en una aplicacion util para celulares con sistema operativo	       Android. La misma te permite hacer consultas de tu hisoria academica, las materias aprobadas y las materias a las que estas habilitado a cursar, ademas de ver el progreso de tu carrera y tiene la informacion actualizada de la pagina de Academic Plannertrae en donde quieras que estes con tu celular.<p>
        
        
		<img src=""
        
		<p>Compatible con Android 2.3.6 en adelante</p>
    	<a href="planner.apk" ><h1>Descargar</h1></a>
        
        <p> Problemas con la instalacion del APK en Android? Clic ACA</p>
        <p> Sugerencias/Comentarios: Clic aqui <p>
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