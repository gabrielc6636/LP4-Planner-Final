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

//echo 'Legajo: '.$_SESSION['username'];

			$objTiempo->baja_horario_alumno($_SESSION['username']);
			ob_start();

foreach($_REQUEST as $key => $val)
{
	//echo $key;
	
	if(substr($key,0,4)=='opt_'){
	
	$dia = substr($key,4,1);
	$horario = substr($key,6,1);
	
	
		if($val==1){
			//echo 'Dia:'.$dia;
			//echo 'Horario: '.$horario;
			//echo 'Status: '.$val;
			
			$objTiempo->alta_horario_alumno($_SESSION['username'],$dia,$horario);
			ob_start();
		}
	
	
	
	}
    
}

$resultado = "";
$resultado = 'Carga realizada exitosamente';

//print_r($_REQUEST);
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
                <form action="user_page.php" class="registrar">
            		<input type="submit" value="Volver a Inicio">
                    
            	</form>
                <form action="user_page_oferta.php">
                	<input type="submit" value="Consultar Oferta Academica">
                </form>
               	</div>
            </div> 
</div>
	<div id="footer">
    	<div style="float:right;margin-top: 10px;">
        	<p style="margin:0px;color: #CCC;font-size:10px">Disponible en</p>
        	<img src="img/android.png" />
        </div>
    </div>
    <div id="footer2" align="center" style="color:#CCCCCC;">
    	<p style="font-size:10px;margin:0;padding-top:8px;">Copyrightę 2014 - Todos los derechos reservados a Academic Planner</p>
    </div>
</body>
</html>