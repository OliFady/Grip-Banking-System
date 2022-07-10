<?php
include "../includes/templates/header.php";
include "../connect.php";
echo "<h1>List of Customers</h1>";

?>




<table class="table">
   <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Current Balance</th>
        <th>View</th>
    </tr>
</thead>

<tbody>
<?php


$query  = "SELECT * FROM customers";
$result = $connection->query($query);

while($row = $result -> fetch_array()){

echo"<tr>

<td>" . $row["ID"] . "</td>
<td>" . $row["Name"] . "</td>
<td>" . $row["Email"] . "</td>
<td>" . $row["Balance"] . "</td>
<td>
<a class ='btn btn-primary btn-sm' href=view.php?id=$row[ID]>Transfer Money</a>
</td>


</tr>";
}

?>
</tbody>
</table>

<?php
include "../includes/templates/footer.php";
?>