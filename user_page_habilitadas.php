<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.html");
    exit;
}
$resultado = "";
$resultado = $_SESSION['fname'].' '.$_SESSION['lname'].' - Legajo: '.$_SESSION['username'];

$legajo = "";
$legajo = $_SESSION['username'];
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

<div class="ss-form-heading"><h1>Consultar materias pendientes</h1> <label><?php echo $resultado; ?></label>


</div> 

<input type="hidden" name="segundoCombo" id="segundoCombo" value="<?php echo $legajo; ?>"> 

<br> 

<input type="hidden" name="pageNumber" value="0"> 

<input type="hidden" name="backupCache" value=""> 

<div class="ss-item ss-navigate"><div class="ss-form-entry" align="center"> 

<input type="submit" name="submit" class="button" value="Consultar" id="calcular">
</div></div>

<script type="text/javascript"> 

      

      (function() {

var error = false;

var divs = document.getElementById('ss-form').

getElementsByTagName('div');

for (var j in divs) {

if (divs[j].className == 'errorbox-bad') {

error = true;

divs[j].lastChild.firstChild.lastChild.focus();

break;

}

}

if (!error) {

for (var i in divs) {

if (divs[i].className == 'ss-form-entry' && divs[i].

firstChild.className == 'ss-q-title') {

divs[i].lastChild.focus();

break;

}

}

}

})();

      </script>
	  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/habilitadas.js"></script>


</div>

	<div id="footer">
		<div class="footerparte1">
			<div style="float:left;margin-right: 10px;margin-top: 5px;">        
        		<img src="img/logoplannerfooter.png" width="30" height="28" />
            </div>
            <div style="float:left;width: 110px;margin-top: -16px;">
        		<p>Para una carrera con mayor organizaci&#243;n.</p>
           	</div>
        </div>    
        <div class="footerparte2">
        	<div style="margin-left:20px;margin-top: 12px;">
                <div style="float:left;margin-right: 45px;"> <a href="construccion.html">Registro</a> </div>    
                <div style="float:left;margin-right: 45px;">|</div>
                <div style="float:left;margin-right: 45px;"> <a href="construccion.html">Consulta</a> </div>    
                <div style="float:left;margin-right: 45px;">|</div>
                <div style="float:left;margin-right: 45px;"> <a href="construccion.html">Contacto</a> </div>    
                <div style="float:left;margin-right: 45px;">|</div>
                <div style="float:left;margin-right: 45px;"> <a href="construccion.html">Alumno </a></div>    
            </div>
        </div>
   	  <div style="float:right;margin-top: 5px;">
        	<a href="descarga.php"><img src="img/android_sitio.png" /></a>
        </div>
    </div>
    <div id="footer2" align="center" style="color:#CCCCCC;">
    	<p style="font-size:10px;margin:0;padding-top:8px;">Copyright&#169; 2014 - Todos los derechos reservados a Academic Planner</p>
    </div>


</body>
</html>