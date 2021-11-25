

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


   <!-- Custom StyleSheet -->
   <link rel="stylesheet" href="signUP.css" />



</head>



<!-- SignIn / SignUp-->

  <div class="container" action>
    <form id="form" class="form" action = "signin.php" method="POST"> 
        <h2 sytle="color=white">Sign up</h2>
        <div class="form-control">
            <label for="firstname">First name</label>
            <input type="text" placeholder="First Name" id="firstname" name="firstname">
            <small id='firstnameError'></small>
        </div>
        <div class="form-control">
            <label for="lastname">Last name</label>
            <input type="text" placeholder="Last Name" id="lastname" name="lastname"  >
            <small id='lastnameError'></small>
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" id="email" name="email">
            <small id='emailError'></small>
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter password" id="password" name="password">
            <small id='passwordError'></small>
        </div>

        <div class="form-control">
            <label for="password2">Confirm Password</label>
            <input type="password" placeholder="Confirm Your Password" id="password2" name="password2" >
            <small id='password2Error'></small>
        </div>

        <div class="form-control">
            <label for="number">Phone Number</label>
            <input type="text" placeholder="Enter Your Phone number" id="phone" name="phone">
            <small id='password2Error'></small>
        </div>


        <small id='success'></small>
        <button type="submit" name="submitC" id='submitBtn'>Sign up</button>
    </form>        
</div>

<?php


    if(isset($_POST['submitC'])){ 
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['phone'];
    

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
 	
   
	$sql= "INSERT INTO signup_info (first_name, last_name, email, password, phone_number) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone')";

    // if the database fail to connect, error message will be displayed
	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
		  
	$conn->close();
   
}

?>
