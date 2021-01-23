<?php
include "connection.php";
error_reporting(0);
$query="SELECT * FROM form";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total !=0)
{
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
</tr>

<?php

while($result=mysqli_fetch_assoc($data)){
    echo"<tr>
            <td>".$result['Name']."</td>
            <td>".$result['Email']."</td>
            <td>".$result['Q1']."</td>
            <td>".$result['Q2']."</td>    
            <td>".$result['Q3']."</td>
            <td>".$result['Q4']."</td>
            </tr>";
}


}
else{
    echo" NO record found";
}



?>
</table>