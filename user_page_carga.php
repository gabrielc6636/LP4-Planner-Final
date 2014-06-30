<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.html");
    exit;
}
//$resultado = "";
//$resultado = 'Bienvenido, '.$_SESSION['fname'].' '.$_SESSION['lname'];
?>
<?php
ob_start();
include("lib/insertLog.php");
$objTiempo = new claseLog();


$objTiempo->alta_materia_alumno($_REQUEST['alumno'],$_REQUEST['materia']);
ob_start();
//header("Location: user_page.php");

$resultado = "";
$resultado = 'Carga realizada exitosamente';


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
    	<img src="img/logoplanner_small.png" />
        
    </div>
    <div class="ss-form-container"> 

            <div class="ss-form-heading">
            	<label><?php echo $resultado; ?></label> 
                <div align="center">
                <form action="user_page_materias.php" class="registrar">
            		<input type="submit" value="Registrar Materias">
                    
            	</form>
                <form action="user_page_consulta.php">
                	<input type="submit" value="Consultar Materias Aprobadas">
                </form>
               	</div>
            </div> 
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