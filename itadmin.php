<!DOCTYPE html>
<html>
<head>
  <title>SVCC IT ADMIN</title>
  <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
  <style>


       body{
  background-color: #f0f0f0;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: black;
  font-family: 'Poppins';
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
  width: 500px;
  margin: 10px auto;
  -webkit-animation: fadeInUp 3s ease;
  font-family: 'Poppins';
}

.button1 {
  background-color: #9f0e31; 
  color: white; 
  
}

.button1:hover {
  background-color: #c31f48;
  color: black;
}

.button2{
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
  margin: 10px auto;
  -webkit-animation: fadeInUp 3s ease;
  font-family: 'Poppins';
}


.header{
     border: 2px  ;
     border-radius: 8px;
     padding: 10px;
     text-align: center;
     background: #810725;
     color: white;
     font-size: 20px;
     font-family: 'Poppins';
     -webkit-animation: fadeInUp 1s ease;
}
  


h2 {
  text-align: center;
   color: black;
  font-family: 'Poppins';
  -webkit-animation: fadeInUp 2s ease;
  
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
</head>
<div class="header">
<h1>IT ADMIN SAINT VINCENT COLLEGE OF CABUYAO</h1>
</div>
<body>

  
  <br>
  <br>
  
  <h2>Please Select Grade:</h2>

    <br>
  <a href="itstudent.php" button class="button button1">Student Fill Up</button>
  <br>

   <a href="parentstb.php" button class="button button1">Parents Fill Up</button>
  <br>



<a href="itlogin.php" button class="button button1">Logout</a>


</body>
</html>