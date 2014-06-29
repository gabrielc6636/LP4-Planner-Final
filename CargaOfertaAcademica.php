<?
include("lib/insertLog.php");
$objTiempo = new claseLog();

//echo $_SERVER['REMOTE_ADDR'];

?>


<?php

   
   
   
	//$resultado->get_log_tren($_GET['IdTren']);
	$result = ($objTiempo->get_oferta_academica());
	
	
	
	$lista=array();
	$contador=0;
	while($row = mysql_fetch_assoc($result)){
		$lista[$contador]=$row;
		$contador++;
	}

   
    echo json_encode($lista);
 //}
?>