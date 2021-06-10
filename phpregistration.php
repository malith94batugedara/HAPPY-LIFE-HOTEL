<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "HLH_Hotel";
$conn= new MySQLi($servername,$username,$password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	 $name = $_POST['data_2'];
	 $address = $_POST['data_3'];
	 $phonenumber = $_POST['data_4'];
	 $email = $_POST['data_5'];
	 $room_name = $_POST['data_6'];
	 $no_of_room = $_POST['data_7'];
	 $arrival_date = $_POST['data_8'];
	 $departure_date = $_POST['data_9'];

	 $sql = "INSERT INTO registration_table (name, address, phonenumber, email, room_name, no_of_room, arrival_date, departure_date)	 VALUES('$name','$address','$phonenumber','$email','$room_name','$no_of_room','$arrival_date','$departure_date')";
	  if ($conn->query($sql) === TRUE) {
		echo "New record Registered successfully !";
	 } 
	else {
  			echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();

?>