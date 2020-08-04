<?php
$First Name = $_POST["First Name"];
$Last Name = $_POST["Last Name"];
$Date of Birth = $_POST["Date of Birth"];
$Gender = $_POST["Gender"];
$Country = $_POST["Country"];
$E-Mail = $_["E-Mail"];
$Phone = $_["Phone"];
$Password = $_["Password"];
if (!empty($First Name) || !empty($Last Name) || !empty($Date of Birth) || !empty($Gender) || !empty($Country) || !empty($E-Mail) || !empty($Phone) || !empty($Password)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "Application form";
	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysql_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT email From register Where email = ? Limit 1";
		$INSERT = "INSERT Into register (First Name, Last Name, Date of Birth, Gender, Country, E-Mail, Phone, Password) values (?, ?, ?, ?, ?, ?, ?, ?)";
		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $E-Mail);
		$stmt->execute();
		$stmt->bind_result($E-Mail);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if ($rnum==0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssii", $First Name, $Last Name, $Date of Birth, $Gender, $Country, $E-Mail, $Phone, $Password);
			$stmt->execute();
			echo "New record inserted sucessfully";
		} else {
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}
	
} else {
	echo "All field are required";
	die();
}

?>