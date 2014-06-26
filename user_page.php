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
                             <li class='last'><a href='construccion.html'><span>Materias Habilitadas</span></a></li>
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
    	<label><?php echo $resultado; ?></label> 
        <br><br>
    	<div id="progreso" align="center">
			<p>Progreso de la Carrera</p>
            <div>45%</div>
                 	<div class="progress-bar green stripes">
                     
                        <span style="width: 45%"></span>
                    </div>
         </div>
         <br><br>

            <!--<div class="ss-form-heading">
            	
                <div align="center">
                <form action="user_page_materiasalta.php" class="registrar">
            		<input type="submit" value="Registrar Materias">
                    
            	</form>
                <form action="user_page_consulta.php">
                	<input type="submit" value="Consultar Materias Aprobadas">
                </form>
				<form action="user_page_oferta.php">
                	<input type="submit" value="Consultar Materias Ofertadas">
                </form>
               	</div>
            </div> -->
</div>

	<div id="footer">
   	  <div style="float:right;margin-top: 5px;">
        	
        	<img src="img/android_sitio.png" />
        </div>
    </div>
    <div id="footer2" align="center" style="color:#CCCCCC;">
    	<p style="font-size:10px;margin:0;padding-top:8px;">Copyright&#169; 2014 - Todos los derechos reservados a Academic Planner</p>
    </div>
    
</body>
</html>