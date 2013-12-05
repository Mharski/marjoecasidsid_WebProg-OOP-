<?php 
	include "Config.php";

	$id = $_GET['id'];
	$identification = new MessageDAO();
	$identification->rejectMessage($id);
	echo "<script> window.location.href = 'backEnd.php';</script>";
 ?>
