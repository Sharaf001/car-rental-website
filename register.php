<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCars - Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-car-side"></i>
            <h1>AutoCars</h1>
            <p>Create your account</p>
        </div>
        
        <form class="login-form" action="register.php" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <div class="input-with-icon">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fullname" placeholder="Enter your full name" id="fullname" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-with-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter your email" id="email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <div class="input-with-icon">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phone" placeholder="Enter your phone number as(00-000-000)" id="phone" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Create a password" id="password" required>
                </div>
                <div class="password-hint">
                    <i class="fas fa-info-circle"></i> Must be at least 8 characters
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm-password" placeholder="Confirm your password" id="confirm-password" required>
                </div>
            </div>
            
            
            <button type="submit" class="login-button" name="register">
                <i class="fas fa-user-plus"></i> Create Account
            </button>
            
            <div class="signup-link">
                Already have an account? <a href="login.php">Sign in</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php 
 include 'conn.php';

  if(isset($_POST['register'])){
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $pass = $_POST['password'];
 $confirm_pass = $_POST['confirm-password'] ;

     if (empty($email) || empty($pass)) {
        echo "Email and password are required.";
    } elseif ($pass!== $confirm_pass) {
        echo "Passwords do not match.";
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user_fullname ,user_phone, user_email,user_pass) VALUES ('$fullname', '$phone', '$email' , '$hash')";

        if($conn->query($sql)==True){
            echo '<script>alert("Registration Successful")</script>';
            echo '<script>window.location.href="login.php"</script>';
        } else {
            echo '<script>alert("Registration Failed")</script>';
        }

  }
  }
?>