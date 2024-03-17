<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #020202;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            color: aliceblue;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 150px;
            padding: 20px;
            background-color: rgba(105, 102, 102, 0.363);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(134, 133, 133, 0.2);
            text-align: left;
        }

        .container:hover {
            box-shadow: 0 0 10px #fff;
        }

        .form-box {
            width: 100%;
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: calc(100% - 10px); /* Adjusted width to include padding */
            padding: 8px;
            border: 1px solid #fff;
            border-radius: 5px;
            background-color: #020202;
            color: white;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            width: calc(100% - 10px); 
            background-color: black; 
            color: white; 
            border: 1px solid white; 
            padding: 10px; 
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #fff; /* White background on hover */
            color: #020202; /* Black text on hover */
        }

        .links {
            margin-top: 10px;
        }

        .links a {
            color: #fff;
            text-decoration: none;
        }

        .message {
            color: red;
        }
    </style>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='loginn.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: user-info.php");
                }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
