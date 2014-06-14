<?
include("lib/insertLog.php");
$objTiempo = new claseLog();

//echo $_SERVER['REMOTE_ADDR'];

?>


<?php

   
   
   if($_GET) 
	{
	//$resultado->get_log_tren($_GET['IdTren']);
	$result = ($objTiempo->get_horarios_legajo($_GET['Legajo']));
	}
	
	if($_POST) 
	{
	//$resultado->get_log_tren($_GET['IdTren']);
	$result = ($objTiempo->get_horarios_legajo($_POST['Legajo']));
	}
	
	
	$lista=array();
	$contador=0;
	while($row = mysql_fetch_assoc($result)){
		$lista[$contador]=$row;
		$contador++;
	}

   
    echo json_encode($lista);
 //}
?>