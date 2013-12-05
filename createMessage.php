<html>
<head>
	<title>Message Sent</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/global.css" >
	<link type = "text/css" rel = "stylesheet" href = "style.css" >
</head>
<body>

</body>
</html>

<?php 

	include "Config.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$arr = array(
		'_name' => $name,
		'_email' => $email,
		'_message' => $message);

	$result = new MessageDAO();
	$result->createMessage($arr['_name'],$arr['_email'],$arr['_message']);
	echo "<script> window.location.href = 'backEnd.php'; alert('Message Successfully Created!'); </script>";
 
 ?>
