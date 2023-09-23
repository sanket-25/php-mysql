<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "sanket_database";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
	?>
	<script type="text/javascript">
		alert("Connection Successful");
	</script>
	<?php
	echo "Hello Connection";
	echo "<br>";
}else{
	?>
	<script type="text/javascript">
		alert("No Connection");
	</script>
	<?php
	die("Connection failed: " . mysqli_connect_error());
}



?>