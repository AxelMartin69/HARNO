<?php

// DATABASE

function database($yks, $kaks, $kolm, $neli, $viis, $kuus, $seitse, $kaheksa) {
	$servername = "localhost";
	$username = "htv3";
	$password = "8dV&%lVZ_3DH";
	$dbname = "htv3_HARNO";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname)	;
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO ettevotte (ettevotte_nimi, vastuvotja, personaal_juhtimine, opib, pilootprogramm, mitunoort, kysimus, e-mail)
	VALUES ($yks, $kaks, $kolm, $neli, $viis, $kuus, $seitse, $kaheksa)";

	if ($conn->query($sql) === TRUE) {
	  echo "Andmed edukalt sisestatud!";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
};

database('1', '2', '3', '4', '5', '6', '7', '8');
	
?>