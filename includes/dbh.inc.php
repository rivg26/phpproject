<?php
function OpenCon(){
	$servername = "localhost";
	$dBUsername = "root";
	$dBPassword = "";
	$dBName = "pos_application";
	
	$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName) or die("Connection failed". $conn -> error);
	
	return $conn;
}


function CloseCon($conn){
	$conn -> close();
}