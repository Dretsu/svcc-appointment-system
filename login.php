<?php 

session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                       
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            
            echo "<p style='color: Red; font-size: 16px;'>wrong username or password!</p>";
        }else
        {
            echo "<p style='color: Red; font-size: 16px;'>wrong username or password!</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCC Login/Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <style type="text/css">
        @media only screen and (min-width: 601px) and (max-width: 900px) {
        
    }
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: poppins, Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #666666;
    background: #eaeff4;
}

.wrapper {
    margin: 0 auto;
    width: 120%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container {
    position: relative;
    width: 150%;
    max-width: 900px;
    height: auto;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 5px #999999;
    -webkit-animation: fadeInUp 1s ease;
}

.login .col-left,
.login .col-right {
    padding: 30px;
    display: flex;
}

.login .col-left {
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0);
    background: #c31f48;
}

.login .col-right {
    padding: 150px 50px;
    width: 50%;
    margin-left: -10%;
}

@media(max-width: 575px) {
    .login .container {
        flex-direction: column;
        box-shadow: none;
    }
    .login .col-left,
    .login .col-right {
        width: 100%;
        margin: 0;
        clip-path: none;
    }
    .login .col-right {
        padding: 30px;
    }
}

.login .login-text {
    position: relative;
    width: 150%;
    color: #ffffff;
}

.login .login-text h2 {
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
}

.login .login-text p {
    margin: 0 0 20px 0;
    font-size: 25px;
    font-weight: 500;
    line-height: 22px;
}

.login .login-text .btn {
    display: inline-block;
    font-family: poppins;
    padding: 7px 20px;
    font-size: 25px;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 30px;
    color: #ffffff;
    outline: none;
    border: 1px solid #ffffff;
    box-shadow: inset 0 0 0 0 #ffffff;
    transition: .3s;
}

.login .login-text .btn:hover {
    color: #c31f48;
    box-shadow: inset 150px 0 0 0 #ffffff;
}

.login .login-form {
    position: relative;
    width: 100%;
}

.login .login-form h2 {
    margin: 0 0 15px 0;
    font-size: 23px;
    font-weight: 700;
}

.login .login-form p {
    margin: 0 0 10px 0;
    text-align: left;
    color: #666666;
    font-size: 16px;
}

.login .login-form p:last-child {
    margin: 0;
    padding-top: 5px;
}

.login .login-form p a {
    color: #c31f48;
    font-size: 50px;
    text-decoration: none;
}

.login .login-form label {
    display: block;
    width: 100%;
    margin-bottom: 2px;
    letter-spacing: .5px;
}

.login .login-form p:last-child label {
    width: 60%;
    float: left;
}

.login .login-form label span {
    color: #c31f48;
    padding-left: 2px;
}

.login .login-form input {
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 30px;
}

.login .login-form input:focus {
    border-color: #c31f48;
}

.login .login-form button,
.login .login-form input[type=submit] {
    display: inline-block;
    width: 100%;
    margin-top: 5px;
    color: #c31f48;
    font-size: 16px;
    letter-spacing: 1px;
    cursor: pointer;
    background: transparent;
    border: 1px solid #c31f48;
    border-radius: 30px;
    box-shadow: inset 0 0 0 0 #c31f48;
    transition: .3s;
}

.login .login-form button:hover,
.login .login-form input[type=submit]:hover {
    color: #ffffff;
    box-shadow: inset 400px 0 0 0 #c31f48;
}


@keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translateY(50px);
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }



.logo {
      float: left;
      max-width: 100px;
    }


    </style>
    <div clss=header>

        <img src="svcclogonobg.png" alt="Logo" class="logo">
        
        </div>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Create your account.</p> <a href="signup.php" class="btn">Sign Up</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form method="post">
                        <p> <label>Username<span>*</span></label> <input type="text" name="user_name" placeholder="Username" required> </p>
                        <p> <label>Password<span>*</span></label> <input type="password" name="password" placeholder="Password" required> </p>
                        <p> <input type="submit" value="login"> </p>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>






