<?php

include 'connection.php';

if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $dob = $_POST['dob'];
     $gender = $_POST['gender'];
     $sql = "INSERT INTO sanket_table (name,email,mobile, dob, gender)
     VALUES ('$name','$email','$mobile', '$dob', '$gender')";
     $result = mysqli_query($conn, $sql);
     if ($result) {
     	?>
     	<script>
     		alert("New Record Added Successfuly");
     	</script>
     	<?php
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        ?>
        <script>
        	alert("Error");
        </script>
        <?php
     }
     mysqli_close($conn);
}

?>