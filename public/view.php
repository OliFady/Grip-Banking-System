<?php
include "../includes/templates/header.php";
include "../connect.php";
?>


<h1>List of Customers</h1>
<table class="table">
   <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Current Balance</th>
        <th>Transfer</th>
    </tr>
</thead>

<tbody>

<?php
$id = $_GET['id'];

if(!is_numeric($id)){ // Checking data it is a number or not
echo "Data Error";
exit;
}

$query  = "SELECT * FROM customers where id='" . $_GET["id"] . "'";
$result = $connection->query($query);



while($row = $result -> fetch_array()){

echo
"<tr>

<td>" . $row["ID"] . "</td>
<td>" . $row["Name"] . "</td>
<td>" . $row["Email"] . "</td>
<td>" . $row["Balance"] . "</td>

<td>
<form name ='form' method='post' action='
transfer.php?id=$id'>

<input type='text' name='amount' id='amount' >
<input name = 'to' id ='to'>
<input class='btn btn-primary' type='submit'>

</form>

</td>

</tr>";
}





?>

<?php
include "../includes/templates/footer.php";
?>