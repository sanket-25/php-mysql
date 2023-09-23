<?php

include 'connection.php';

$sql = "SELECT * FROM sanket_table";

$result = mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    	$gendermf=0;
    	if($row["gender"]==1){
    		$gendermf = "Male";
    	}
    	else{
    		$gendermf = "Female";
    	}
        echo "Id : " . $row["id"] . " , Name: " . $row["name"] . " , Email: " . $row["email"] . " , Mobile: " . $row["mobile"] . " , DOB: " . $row["dob"] . " , Gender: " . $gendermf . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>