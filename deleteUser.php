
<?php include 'db.php'; ?>
<?php include('server.php'); ?>
<?php 
$use=$_SESSION['username'];
 $sql_query = "DELETE from login WHERE username='$use' ";
  $sql_query1 = "DELETE from chat WHERE name='$use'";
        echo '$use';                                                           
    $result = $con->query($sql_query);
    $result1 = $con->query($sql_query1);
     ?>