<?php include 'db.php'; ?>
<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css" crossorigin="anonymous">
     <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" crossorigin="anonymous">
      <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>Conditions d'utilisation</title>
  <style type="text/css">
    #paper {
  color:#FFF;
  font-size:20px;
}
#margin {
  margin-left:12px;
  margin-bottom:20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none; 
  color:black;
}
#text {
  width:500px;
  overflow:hidden;
  background-color:#FFF;
  color:black;
  font-family:Courier, monospace;
  font-weight:normal;
  font-size:24px;
  resize:none;
  line-height:40px;
  padding-left:100px;
  padding-right:100px;
  padding-top:45px;
  padding-bottom:34px;

  background-repeat:repeat-y, repeat;
  -webkit-border-radius:12px;
  border-radius:12px;
  -webkit-box-shadow: 0px 2px 14px #000;
  box-shadow: 0px 2px 14px #000;
  border-top:1px solid #FFF;
  border-bottom:1px solid #FFF;
}
#title {
  background-color:transparent;
  border-bottom:3px solid black;
  color:black;
  font-size:20px;
  font-family:Courier, monospace;
  height:28px;
  font-weight:bold;
  width:220px;
}
#button {
  cursor:pointer;
  margin-top:20px;
  float:left;
  height:40px;
  width: 150px;
  padding-left:24px;
  padding-right:24px;
  font-family:Arial, Helvetica, sans-serif;
  font-weight:bold;
  font-size:20px;
  color:#FFF;
  text-shadow: 0px -1px 0px #000000;
  -webkit-border-radius:8px;
  border-radius:8px;
  border-top:1px solid #FFF;
  -webkit-box-shadow: 0px 2px 14px #000;
  box-shadow: 0px 2px 14px #000;
  background-color: #62add6;
  background-image:url(https://static.tumblr.com/maopbtg/ZHLmgtok7/button.png);
  background-repeat:repeat-x;
}
#button:active {
  zoom: 1;
  filter: alpha(opacity=80);
  opacity: 0.8;
}
#button:focus {
  zoom: 1;
  filter: alpha(opacity=80);
  opacity: 0.8;
}
#wrapper {
  width:700px;
  height:auto;
  margin-left:auto;
  margin-right:auto;
  margin-top:24px;
  margin-bottom:100px;
}




textarea {
  width: 100%;
  background: #FFF8DC;
  height: 35px;
  border: 1px solid gray;
  border-radius: 5px;
}
  </style>
	
	 <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-white bg-white">
  <a class="navbar-brand" href="#"><img src="img/logo.png" height=50 width=70></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-comments">
            <span class="badge badge-danger">11</span>
          </i>
          Messages
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="home.php">
          <i class="fa fa-users " >
          </i>
          Discuter en groupe!
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user-secret">
          </i>
          Discuter avec anonyme!
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="home.php?logout='1'">
          <i class='fas fa-sign-out-alt' style='font-size:38px;color:red'></i> <br>

          <p style="color:red;">Déconnecter</p>
        </a>
      </li>
      <li id="deleteUser" class="supp nav-item">
        <a type="submitt" id="deleteUser" class="nav-link" href="home.php?logout='1'">
          <i id="deleteUser" class="fa fa-trash" aria-hidden="true" style='color:red'></i> 
          
          <p style="color:red;">Supprimer Mon compte</p>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="card border-danger golge" style="background-color: #E6E6FA;">
    <b><p style="color:#FF7F50; font-size: 19px;">Contacter l'ADMIN: </p></b>

            <div class="card-header " style="font-weight: bold;font-size: 17px">
              <div id="wrapper">

  <form id="paper" method="post" action="contact_admin.php">

    <div id="margin">Objet: <input id="title" type="text" name="title"></div>
    <textarea placeholder="Ecrire içi ..." id="text" name="text"  style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
    <br>
    <input id="button" type="submit" name="dec" value="Envoyer">
    
  </form>
  <?php

  if(isset($_POST['dec'])) 
  {
    $mssg = mysqli_real_escape_string($con,$_POST['text']);
    $title =mysqli_real_escape_string($con,$_POST['title']);
    $uname=mysqli_real_escape_string($con,$_SESSION['username']);
    $query = "INSERT INTO `declaration`(uname,title,mssg) VALUES ('$uname','$title','$mssg') "; 
    $run = $con->query($query);
  }
  ?>
</div>
</div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
<footer id="footer">
    &copy; Créé par  <b> Brahmi Khairi</b> - <a href="condition.html">Conditions d'utilisation</a> - <a href="contact_admin.php">Contacter l'ADMIN</a>  
 </footer>
</html>