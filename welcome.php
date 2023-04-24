<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to SVCC High School Apointment System</title>
  <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>

</head>
<body>

	<style type="text/css">

    @media only screen and (min-width: 601px) and (max-width: 900px) {
        
    }

body{
	
	background-color: #f0f0f0;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Poppins';
}

#box{
        border: 2px solid ;
        border-radius: 8px;
    background-color: grey;
    margin: auto;
    width: 500px;
    padding: 70px;
    position: absolute;
    top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

  }

.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 40px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  display: block;
  width: 200px;
  margin: 20px auto;
  font-family: 'Poppins';
  -webkit-animation: fadeInUp 2s ease;
}

.button1 {
  background-color: #9f0e31; 
  color: white; 
  

}

.button1:hover {
  background-color: #c31f48;
  color: black;
}

.button2 {
  background-color: #9f0e31; 
  color: white; 

}

.button2:hover {
  background-color: #c31f48;
  color: black;
}

.header{
     border: 2px  ;
     border-radius: 8px;
     padding: 10px;
     text-align: center;
     background: #810725;
     color: white;
     font-size: 20px;
     overflow: auto;
     -webkit-animation: fadeInUp 1s ease;
     font-family: 'Poppins';
}

 h1 {
  text-align: center;
   color: white;
  font-family: 'Poppins';
  margin-right: 20px;
}

.logo {
      float: left;
      max-width: 100px;
      margin-right: 20px;
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


	</style>
  <body>
	<div class="header">
    <img src="svcclogo.jpg" alt="Logo" class="logo">
<h1>WELCOME TO THE SVCC HIGHSCHOOL COPY OF GRADES REQUEST SYSTEM</h1>

</div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
	<a href="Frontpage.php" button class="button button1">Student</button>

	<a href="frontpageparents.php" button class="button button2">Parents</button>

  <a href="adminlogin.php" button class="button button2">Faculty</button>

  <a href="itlogin.php" button class="button button2">Admin</button>
	
  </body>

</html>