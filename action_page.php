<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Result</title>

<style type="text/css">

	body {
      display: block;
      text-align: center;
	  background-color: #630031;
	  height: 100%;
	  background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, Helvetica, sans-serif;
    
     }

	div{

	  display: inline-block;
      margin-left: auto;
      margin-right: auto;
      text-align: left;    
      background-color: White;
	  margin: auto;
	  width: 700px;
	  padding: 40px;
	  position: absolute;
	  top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); 
      font-size: 250%;
      font-family: sans-serif;
	}

	h3 {
      text-align: center;
	  border-style: solid;
	  border: 8px solid red;
      border-radius: 5px;
      background-color:Tomato;
      font-family: sans-serif;
	}

    .button1 {
      background-color: white; 
      color: black; 
      border: 2px solid ;
      width: 500px;
      font-size: 16px;
    }

	</style>
</head>

<h1>Thank You for complying!!!</h1>
<h1>Make sure to take a screenshot of this screen as your receipt and press</h1>

<body>
	

<div id="results"><h3>SVCC Appointment Receipt</h3></div>


<script>
	const resultsList = document.getElementById('results')
	new URLSearchParams(window.location.search).forEach((value,
		name) => {
		resultsList.append(`${name}: ${value}`)
		resultsList.append(document.createElement('br'))
		
    
	})

</script>



</form>

	
</body>
</html>