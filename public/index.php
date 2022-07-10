<?php
include "../includes/templates/header.php";
include "../connect.php";
?>
<div class="bg-image" 
     style="background-image: url('https://images.pexels.com/photos/5849577/pexels-photo-5849577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            height: 100vh">
            <a class="btn " href="customers.php"></a>
<a class="btn " href="transactions.php"></a>
</div>

<div class="container">
  <div class="form-row text-center">
    <div class="col ">
<a class="btn btn-primary" href="customers.php">View all Customers</a>
<a class="btn btn-secondary" href="transactions.php">View all Transactions</a>
</div>
  </div>
</div>

<?php
include "../includes/templates/footer.php";

?>