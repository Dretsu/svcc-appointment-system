
<!DOCTYPE html>
<html>
<head>
	
	<title>Parents Fill Up Form</title>
  
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

	<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap');
	body {
    display: block;
    text-align: center;
	  background-color: #36393e;
	  height: 100%;
	  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Poppins';
     }

  #text{

    height: 80px;
    border-radius: 5px;
    padding: 8px;
    border: solid thin #aaa;
    width: 100%;

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
      font-size: 20px;
      -webkit-animation: fadeInUp 2s ease;

}
   #blink {
    font-size: 30px;
    font-weight: bold;
    font-family: 'Poppins';
    text-align: left;
    color: white;
        }

    h2{
     border: 2px  ;
     border-radius: 8px;
     padding: 10px;
     text-align: center;
     background: #810725;
     color: white;
     font-size: 20px;
     font-family: 'Poppins';

}

h3{
  text-align: center;
  margin-right: 20px;
}

input[type="text"] {
  width: 600px;
  height: 40px;
  font-size: 20px;
}

select[id="sec"] {
  width: 600px;
  height: 40px;
  font-size: 20px;
}

input[type="datetime-local"] {
  width: 600px;
  height: 40px;
  font-size: 20px;
}


input[type="button"] {
  width: 600px;
  height: 40px;
  font-size: 20px
}

a {
  color: #008000; 
  text-decoration: none; 
  font-size: 30px;
}

a:hover {
   color: red;
  text-decoration: underline;
    font-size: 33px;
}

#qrcode {
    display: flex;
    justify-content: center;
    align-items: center;
    
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
<h2>Take note that once you submit the form, The admin will review your submitted form, Take your time filling up the form. The admin will decline your form if the submitted input is inappropriate or wrong input details</h2>

<h2>After you finish, Click "Generate QR Code" and screenshot your screen to save the QR code, then click submit</h2>

<body>

  <h3 id="blink">
 
        * The School Services are available 
        <br>
        on Monday to Friday!!!
    </h3>
      
    <script type="text/javascript">
        var blink = 
            document.getElementById('blink');
  
        setInterval(function () {
            blink.style.opacity = 
            (blink.style.opacity == 0 ? 2 : 0);
        }, 1000); 
    </script>

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

  <form action="parentsdb.php" method="POST">
  <form>
 <input type="text" id="id" name="id" value="Grade 10" readonly><br><br>

  <label for="pname">Parent's Name:</label>
  <br>
  <input type="text" id="pname" name="pname" size="30" required><br>

 <label for="name">Student's Name:</label>
  <br>
  <input type="text" id="name" name="name" size="30" required><br>


 <label for="sec">Grade 10 Section:</label>
 <br>
<input type="text" id="sec" name="sec" size="30" required><br>
    
 </select>
 <br>
  <label for="Appointment Date">Select Appointment Date:</label>
    <br>
  <input type="text" class="form-control" id="datepicker" name="datepicker" required>
   <br>
<label for="time">Select Time:</label>
<input type="time" class="form-control" id="timepicker" name="timepicker" required>
<br>
<br>
   
  <input type="button" id="qrcoder" value="Generate QR Code" onclick="generateQRCode()">
  <br>
  <br>
  <div id="qrcode"></div>
<br>
<br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
<br>
<br>
<br>
<a href="index.php" >Back</a>


<script type="text/javascript">
  function generateQRCode() {
  document.getElementById("qrcoder").disabled = true;
   var id = document.getElementById("id").value;
   var pname = document.getElementById("pname").value;
  var name = document.getElementById("name").value;
  var sec = document.getElementById("sec").value;
  var datepicker = document.getElementById("datepicker").value;
  var timepicker = document.getElementById("timepicker").value;
  var data =  id  + "\nParent's Name: "+ pname + "\nStudent's Name: " + name  + "\nSection: " + sec + "\nAppointment Date: " + datepicker + "\nAppointment Time: " + timepicker ;
  var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: data,
    width: 256,
    height: 256,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H
  });
  document.forms[0].action = qr._elImage.src;
  document.forms[0].submit();
  
}</script>

<script>
    $(document).ready(function(){
      $("#datepicker").datepicker({
        minDate: 0, // prevents selection of past dates
        dateFormat: 'yy-mm-dd' // sets date format to yyyy-mm-dd
        });
      $("#timepicker").timepicker({
        timeFormat: 'HH:mm', // sets time format to 24-hour HH:mm
        interval: 15, // sets time intervals to 15 minutes
        minTime: '8:00', // sets earliest time to 8:00 AM
        maxTime: '20:00', // sets latest time to 8:00 PM
        dynamic: false, // disables scrolling through times
        dropdown: true, // enables time dropdown menu
        scrollbar: false // disables time scrollbar
      });
    });
  </script>


 
</body>


</html>