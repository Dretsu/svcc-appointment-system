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

			//save to database
			//auto save need to check the user name if its already taken 
		    $query = "select COUNT(*) as userCount from users where user_name = '$user_name'";
			$result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
            $userCount = $data['userCount'];
            echo $data['userCount'];

			if($userCount == 0)
			{
				
				  $user_id = random_num(20);
			      $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            
			      mysqli_query($con, $query);

			      header("Location: login.php");
			      die; 
						
				
			}
			
			else {
				echo "<p style='color: Red; font-size: 16px;'>username is already taken, please try another user name</p>";

		    }

		}

		else

		{
		
			echo "<p style='color: Red; font-size: 16px;'>Please enter some valid information!</p>";

		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
	
</head>
<body>

	<style type="text/css">

@media only screen and (min-width: 601px) and (max-width: 900px) {
        
   }
	body {
			background-color: #f0f0f0;
			font-family: Arial, sans-serif;
			text-align: center;
		}
		h1 {
			margin-top: 50px;
			font-size: 36px;
			color: #333;
		}
		form {
			margin-top: 50px;
			display: inline-block;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 40px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			animation: fadeInUp 1s ease;
			-webkit-animation: fadeInUp 2s ease;
		}



		input[type="text"], input[type="password"] {
			display: block;
			margin: 20px auto;
			padding: 20px;
			width: 80%;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			color: #333;
			box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
		}
		input[type="submit"] {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			color: #fff;
			background-color: #333;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			transition: all 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #555;
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

		
.header{
     border: 2px  ;
     border-radius: 8px;
     padding: 10px;
     text-align: left;
     background: #810725;
     color: white;
     font-size: 20px;
     overflow: auto;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
     font-family: 'Poppins';
     -webkit-animation: fadeInUp 1s ease;
}

h1 {
  text-align: center;
   color: white;
  font-family: 'Poppins';
  margin-right: 20px;
  
}

.logo {
      max-width: 100px;
    }
 
	</style>
	<div class="header">
		
<h1>SVCC Student Signup</h1>
</div>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 10px;margin: 10px;color: white;">Create Account</div>
             <img src="svcclogonobg.png" alt="Logo" class="logo">
             <h2>Sign Up</h2>

			 <p> <label>Username<span>*</span><input id="text" type="text" name="user_name"></p><br><br>
			<p> <label>Password<span>*</span><input id="text" type="password" name="password"></p><br><br>

			<input id="button" type="submit" value="Signup"><br>
            <p>Have an account already? Login now</p>
			<a href="login.php">Click to Login</a><br><br>

		</form>
	</div>

	<div id= "body">
		
</body>
</html>


</script>