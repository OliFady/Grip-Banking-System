<?php
include "../includes/templates/header.php";
include "../connect.php";
$from = $_GET['id'];
$amount = $_POST["amount"];
$to = $_POST["to"];

$sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($connection,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($connection,$sql);
    $sql2 = mysqli_fetch_array($query);
?>

<?php

     $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$from";
                mysqli_query($connection,$sql);

                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$to";
                mysqli_query($connection,$sql);
                
                $sender = $sql1['ID'];
                $receiver = $sql2['ID'];
                $sql = "INSERT INTO transaction(`Sender`, `Receiver`, `Balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($connection,$sql);

                if($query){
                    
                    echo "<h1>Transaction Completed</h1>";
                    echo "<a class ='btn btn-primary btn-sm' href='customers.php'>View all Customers</a>";
                    echo "<a class ='btn btn-primary btn-sm' href='transactions.php'>View all Transactions</a>";

                }
?>



<?php
include "../includes/templates/footer.php";
?>