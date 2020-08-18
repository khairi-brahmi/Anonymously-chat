<?php include 'db.php'; ?>
<?php include('server.php'); ?>
<?php
        

  $psd=$_SESSION['username'];
                                                           
    // time actuel

    // on recherche l’utilisateur
    $sql_query = "SELECT * FROM login where username='$psd'";
    $result = $con->query($sql_query);
                                                               
    // si l'utilisateur n'est pas deja dans la table
    if($result)
    {
    $sql_query = "UPDATE login SET date_conn= NOW() WHERE username='$psd'";
                                                                   
    $result = $con->query($sql_query);
                                                                   
    }
?>

 <b style='position: center; color: #3CB371;'>
<?php 
    
   $sql_query = "SELECT * FROM login WHERE (date_conn  > NOW() - 2*60) ";
    $result = $con->query($sql_query);
    while($visiteurs = $result->fetch_array())
    {
      echo"<i class='fa fa-user' aria-hidden='true'></i> ";
      echo ' ';
    echo $visiteurs['username'] ."<a href='#'  role='button'><i style='float: right;' class='glyphicon glyphicon-comment' aria-hidden='true'></i></a><a href='#'  role='button'><i style='float: right;width: 30px;' class='fa fa-user-plus' aria-hidden='true'></i></a> <br>";
                                  
    }
     ?>

 </b>
