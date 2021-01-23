<html>
<body>
<?php 
include "connection.php";
$sql = "SELECT * FROM history2";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<body>
<a href="../HTML/admin.html" class="previous">&laquo; Go Back</a><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<h1 align="center">History</h1>
<table id="myTable" border="1" align="center" style="line-height:25px;">
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Checkin</th>
<th>Checkout</th>
<th>Room Type</th>
<th>No. Of Rooms</th>
<th>No. Of Days</th>
<th>Adults</th>
<th>children</th>
<th>Address</th>
<th>Cost</th>
<th>Time</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['checkin']; ?></td>
<td><?php echo $row['checkout']; ?></td>
<td><?php echo $row['roomtype']; ?></td>
<td><?php echo $row['numberofrooms']; ?></td>
<td><?php echo $row['numberofdays']; ?></td>
<td><?php echo $row['adults']; ?></td>
<td><?php echo $row['children']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['cost']; ?></td>
<td><?php echo $row['time']; ?></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's No data found!!!</th>
</tr>
<?php
}
?>
</table>
</body>
</html>