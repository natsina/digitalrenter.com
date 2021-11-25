
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
    <form id="form" class="form" action = "index.php"  method="POST"> 
        <h2 sytle="color=white">Sign In</h2>
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

        


        <small id='success'></small>
        <button type="submit" name="submitD" id='submitBtn'>Sign In</button>

        <a href="SignUp.php" class="nav__link">Sign Up if you don't have an Account</a>

        
    </form>        
</div>