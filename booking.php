
<!DOCTYPE html>
<html lang="en">

<!-- Custom StyleSheet -->
<link rel="stylesheet" href="booking.css" />





<form action="reservation.php" method="post">
    <div class="elem-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
      <label for="email">Your E-mail</label>
      <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
    </div>
    <div class="elem-group">
      <label for="phone">Your Phone</label>
      <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
    </div>
    <hr>
    <hr>
    <div class="elem-group">
      <label for="message">Please describe what you want in detail</label>
      <textarea id="message" name="visitor_message" placeholder="Tell us the full detail of why you are booking." required></textarea>
    </div>
    <button type="submit" name="submitC" id='submitBtn'>Submit</button>
  </form>


</html>



if(isset($_POST['submitC'])){ 
$name= $_POST['visitor_name'];
$phone= $_POST['visitor_phone'];
$message= $_POST['visitor_message'];

   

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
 	
   
	$sql= "INSERT INTO booking (visitor_name, visitor_phone, visitor_message) VALUES ('$name', '$phone', '$message')";

    // if the database fail to connect, error message will be displayed
	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
		  
	$conn->close();
   
}