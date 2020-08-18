<?php include 'db.php'; ?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <title>AnonyTunisia</title>

  <script type="text/javascript">
  $("[data-toggle=show-popover]").popover('show');
  $("[data-toggle=popover]").popover();

    function ajax() {

      var req = new XMLHttpRequest();

      req.onreadystatechange = function() {
        if(req.readyState == 4 && req.status == 200) {
          document.getElementById('chat1').innerHTML = req.responseText;
        }
      }

      req.open('GET', 'chat1.php', true);
      req.send();

    }
    setInterval(function() {ajax()}, 1000);


    function ajax1() {

      var req = new XMLHttpRequest();

      req.onreadystatechange = function() {
        if(req.readyState == 4 && req.status == 200) {
          document.getElementById('online').innerHTML = req.responseText;
        }
      }

      req.open('GET', 'online.php', true);
      req.send();

    }
    setInterval(function() {ajax1()}, 1000);
  </script>
</head>
<body  onload="ajax();ajax1();">
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
        <a class="nav-link active" href="http://localhost/chat/home.php">
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
          <i class="fa fa-sign-out" aria-hidden="true" style='color:red'></i>
          <p style="color:red;">Déconnecter</p>
        </a>
      </li>
      <li id="deleteUser" class="supp">
        <a type="button" name="delete" id="deleteUser" class="nav-link" >
          <i id="deleteUser" class="fa fa-trash" aria-hidden="true" style='color:red'></i>
           <p style="color:red;">Supprimer Mon compte</p>
        </a>
        <?php
 if(isset($_POST['delete'])) 
 {
  $u=$_SESSION['username'];
   $query = "DELETE from `login` where username = '$u' "; 
   $run = $con->query($query);

 }
        ?>
      </li>
    </ul>
  </div>
</nav>

<div id="container">
      
        <div  style="margin-left: 50%;font-weight: bold;font-size: 19px">
              <p target="_blank" class="isteColor">
                <h6><strong>Discussion</strong></h6>
              </p>
            </div>
  <div id="container" class="card border-danger" style="background-color: #E6E6FA; height:300px;" id="chat_box">
    <div id="chat1"></div>
  </div>

  <form method="post" action="home.php">
    <textarea id="text" name="msg" placeholder="Ecrire içi ..." maxlength="300"></textarea>
   <input aria-hidden="true"  type="submit" name="submit" value=" Envoyer"> 
  </form>
</div>
  <?php 
  if(isset($_POST['submit'])) {
    $msg = $_POST['msg'];
    $name=$_SESSION['username'];
  
    $q= "INSERT INTO chat (name,msg) VALUES ('$name','$msg') "; 

    $run = $con->query($q);



  }
  ?>

 
</div>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<footer id="footer">
    &copy; Créé par  <b> Brahmi Khairi</b> - <a href="http://localhost/chat/condition.html">Conditions d'utilisation</a> - <a href="http://localhost/chat/contact_admin.php">Contacter l'ADMIN</a>  
 </footer>
</body>
</html>