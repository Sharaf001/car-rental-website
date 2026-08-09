<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCars - Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
    background-color: var(--light-gray);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    background-image: url('https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    background-blend-mode: overlay;
    background-color: rgba(0, 0, 0, 0.3);
}
</style>
<body>
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-car-side"></i>
            <h1>AutoCars</h1>
            <p>Login to rent a car</p>
        </div>
        <?php 
session_start();
require 'config.php';
 if(isset($_POST['login'])){
    $email = $_POST['email'] ;
    $password = $_POST['password'];

       $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ?");
       $stmt->execute([$email]);
       $user = $stmt->fetch(PDO::FETCH_ASSOC);

       if($user && password_verify($password,$user['user_pass'])){
         $_SESSION['user_id'] = $user['user_id'];
         $_SESSION['email'] = $user['user_email'];
         header("Location: RentCar.php");
         exit;
        }else{
        echo '<div class="alert alert-danger mt-3">Invalid email or password</div>';
       }
  }
        
?>
        <form class="login-form" action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-with-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter your email" id="email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your password" id="password" required>
                </div>
            </div>
            
            <div class="form-options">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember" onclick="ShowPassword()">
                    <label for="remember">Show Password</label>
                </div>
            </div>
            
            <button type="submit" class="login-button" name="login">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
            
            <div class="signup-link">
                New to CarRent Pro? <a href="register.php">Create an account</a>
            </div>
        </form>
    </div>

    <script>
    function ShowPassword() {
    const passwordInput = document.getElementById("password");
    const checkbox = document.getElementById("remember");

    if (checkbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>

</body>
</html>


 
