<?php
	function connectDB() {
		$conn =mysqli_connect('localhost','root','','add_data');
		return $conn;
	}
?>