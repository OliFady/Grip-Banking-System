<?php
include "../includes/templates/header.php";
include "../connect.php";
?>

<h1>List of Transactions</h1>
<table class="table">
   <thead>
    <tr>
        <th>Transaction ID</th>
        <th>Sender</th>
        <th>Reciever</th>
        <th>Amount Transferred</th>
        <th>Date of Transaction</th>
    </tr>
</thead>

<tbody>
<?php


$query  = "SELECT * FROM transaction";
$result = $connection->query($query);

while($row = $result -> fetch_array()){

echo"<tr>

<td>" . $row["TID"] . "</td>
<td>" . $row["Sender"] . "</td>
<td>" . $row["Receiver"] . "</td>
<td>" . $row["Balance"] . "</td>
<td>" . $row["Datetime"] . "</td>

</tr>



";
}




?>
</tbody>
</table>

<?php
echo "<a class ='btn btn-primary btn-sm  mx-auto ' href=customers.php>View all Customers</a>
<a class ='btn btn-primary btn-sm  mx-auto ' href='index.php'>Return to Home</a>";
include "../includes/templates/footer.php";
?>