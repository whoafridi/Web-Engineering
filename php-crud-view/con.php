<?php 
	session_start();
	$db = new mysqli('localhost', 'root', '', 'crud');
    
	$name = "";
	$address = "";
	$id = 0;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
        $email = $_POST['email'];
		$address = $_POST['address'];
		$save = $db->query("INSERT INTO info (name, address) VALUES ('$name','$email','$address')"); 
		$_SESSION['message'] = "saved sucessfully!"; 
		header('location: index.php');
	}
	$results = $db->query("SELECT * FROM information");
?>