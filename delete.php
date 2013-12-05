<?php 
	include "Config.php";

    $id = $_GET['id'];
    $identification = new MessageDAO();
    $identification->deleteMessage($id);
	echo "<script> window.location.href = 'backEnd.php'; alert('Message Successfully Deleted!')</script>"; 	
 ?>
