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
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
						<title>Carga de Disponibilidad</title>
						<link href="layout01.css" rel="stylesheet" type="text/css" />
						<link href="styles/sesion.css" rel="stylesheet" type="text/css" />
						</head><body>
						
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
                            
                            
                            
						<div class="ss-form-container"><div class="ss-form-heading"><h1>Carga de Disponibilidad</h1></div>
						
							
							<form id="my-dynamic-form" action="alta_dias.php" method="post">
							
							<table><caption></caption>
							<thead>
								<tr>
									<th scope="col">D&#205;A</th>
									<th scope="col">MA&#209;ANA</th>
									<th scope="col">TARDE</th>
									<th scope="col">NOCHE</th>
								</tr>
							</thead>
							<tfoot><tr><td colspan="10">Compiled by Academic Planner</td></tr></tfoot>
							<tbody>
													
							
								<tr class="odd">
														
								<th scope="row">LUNES</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_1_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_1_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_1_3" value="1"></td>
								
								</tr>
								
								<tr class="odd">
														
								<th scope="row">MARTES</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_2_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_2_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_2_3" value="1"></td>
								
								</tr>
								
								<tr class="odd">
														
								<th scope="row">MI&#201;RCOLES</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_3_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_3_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_3_3" value="1"></td>
								
								</tr>
								
								<tr class="odd">
														
								<th scope="row">JUEVES</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_4_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_4_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_4_3" value="1"></td>
								
								</tr>
								
								<tr class="odd">
														
								<th scope="row">VIERNES</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_5_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_5_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_5_3" value="1"></td>
								
								</tr>
								
								<tr class="odd">
														
								<th scope="row">SABADO</th>
								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_6_1" value="1"></td>
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_6_2" value="1"></td>								
								<td><input style="margin:0; width:252px;" type="checkbox" name="opt_6_3" value="1"></td>
								
								</tr>
								
							</tbody></table>
							
							<input type="submit" value="Guardar" name="Guardar"></form>
							
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