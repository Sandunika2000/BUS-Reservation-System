<?php 
 include('dbconn.php');
 session_start();
if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
 
    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE Email = '$email'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);
       if($password==$row['Password']){
        $_SESSION['userid'] = $row['ID'];
        header('location:busdetails.php');
       }
       else{
        $message[] = 'Incorrect Password!';
       }
       //$_SESSION['userid'] = $row['id'];
       
 
    }else{
       $message[] = 'Not Register Your Email! Please Register First Your Email!';
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            background: url(img/bg.webp);
            -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        }
        .login-container {
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .form-control{
            background: rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>

    <div class="container">
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close mb-0" data-bs-dismiss="alert"></button>
    <strong>'.$message.'</strong>
  </div>';
   };
};

?>
        <div class="row justify-content-center">
            <div class="col-md-4 login-container">
                <h2 class="text-center mb-4">Login</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label text-white">Username</label>
                        <input type="text" name="email" class="form-control" id="username" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                    <a type="submit" href="index.php" class="btn btn-dark btn-block text-end">Home</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
