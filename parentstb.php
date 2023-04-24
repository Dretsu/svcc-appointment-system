

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SVCC ADMIN GRADE 10</title>
    <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>

	 <style type="text/css">
       table {
        border-collapse: collapse;
        width: 100%;
         color: #eb4034;
         font-family: 'Poppins';
         font-size: 25px;
        text-align: left;
      }
      
       th {
        background-color: #eb4034;
         color: white;
       } 

      tr:nth-child(even) {background-color: #ededed}

      body{
        font-family: 'Poppins';
      }


  </style>

</head>
<button id="myButton" class="float-left submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "admin.php";
    };
</script>

<h1>Parent Fill Up</h1>
<body>
<label for="search">Search:</label>
<input type="text" id="search" onkeyup="findInPage()" placeholder="Type to search">

<script>
function findInPage() {
  var searchText = document.getElementById("search").value;
  if (searchText) {
    if (window.find) {        // Firefox, Chrome, etc.
      if (!window.find(searchText)) {
        alert("No matches found.");
      }
    } else if (document.body.createTextRange) {    // IE
      var range = document.body.createTextRange();
      if (!range.findText(searchText)) {
        alert("No matches found.");
      }
    }
  }
}
</script>
<br> <br> <br>
<?php
$conn = mysqli_connect("localhost", "root", "","user_input1");
$sql = "SELECT id, pname, name, sec, datepicker, timepicker FROM users1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr><th>ID</th><th>Parent's Name</th><th>Student's Name</th><th>Grade</th><th>Appointment Date</th><th>Appointment Time</th><th></th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["pname"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["sec"] . "</td>";
    echo "<td>" . $row["datepicker"] . "</td>";
    echo "<td>" . $row["timepicker"] . "</td>";
    echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
    }
echo "</table>";
}
mysqli_close($conn);
?>
</tbody>
</table>
</body>
</html>


