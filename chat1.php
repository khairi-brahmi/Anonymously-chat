<?php include('server.php'); ?>

<?php
	include 'db.php';
	$query = "SELECT * FROM chat ORDER BY id ASC";
	$run = $con->query($query);
	
	
while($row = $run->fetch_array() ) :
	?>
	

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	.nickname {
padding:6px 0 6px 0;
	background:transparent;
	color:black;
	width:440px;
	border-radius:2px;
	border:none;
	text-align: justify;
	
}
.msg{

	padding:6px 0 6px 0;
	font-family:Georgia, serif;
	background:#B0C4DE;
	color:black;
	width:700px;
	
	border-radius:2px;
	border:none;
	text-align: justify-all;
	  word-wrap: break-word;

  overflow: hidden;
}
.profil {
  display: inline-block;
  padding: 2px 7px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#000080;
  border: none;
  border-radius: 2px;
  box-shadow: 0 9px transparent;
}

.profil:hover {background-color:#008080}

.profil:active {
  background-color:#008080;
  box-shadow: 0 5px transparent;
  transform: translateY(4px);
}
.add {
  display: inline-block;
  padding: 4px 4px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;

  border-radius: 20px;
}

.add:hover {background-color: #3e8e41}

.add:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
.mp {
  display: inline-block;
  padding: 4px 4px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #CD5C5C;
  border: none;

  border-radius: 20px;
}

.mp:hover {background-color: #3e8e41}

.mp:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
.prof {
  display: inline-block;
  padding: 4px 4px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color:#D3D3D3;
  border: none;

  border-radius: 20px;
}



</style>
	<div id="chat_data">

		<div class="btn-group dropup btn-block nickname">
                      <button type="button" class="profil dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"> <b> <?php echo $row['name']; ?>  </b></i> </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><i  class=" prof fa fa-user"> <b><?php echo $row['name']; ?></b></i> <i style="float:right;" class="fa fa-window-close" aria-hidden="true"></i>
 </li>
                        <li><i class="fa fa-info" aria-hidden="true"></i>.Sexe : <b><?php 
                        $query1 = "SELECT * FROM login ";
						$run1 = $con->query($query1);
                        while ($row1 = $run1->fetch_array()) {
                        	if ( $row['name']==$row1['username']) {
                        		echo $row1['gender'];
                        	}
                        	
                        }?></b></li>
                        <li class="divider"></li>
                        <li><i class="fa fa-info" aria-hidden="true"></i>.Age : <b><?php 
                        $query1 = "SELECT * FROM login ";
						$run1 = $con->query($query1);
                        while ($row1 = $run1->fetch_array()) {
                        	if ( $row['name']==$row1['username']) {
                        		echo $row1['age'];
                        	}
                        	
                        }?> ans</b></li>
                        <li class="divider"></li>
                        <li><i class="fa fa-info" aria-hidden="true"></i>.Situation amoureuse : <b><?php 
                        $query1 = "SELECT * FROM login ";
						$run1 = $con->query($query1);
                        while ($row1 = $run1->fetch_array()) {
                        	if ( $row['name']==$row1['username']) {
                        		echo $row1['situation'];
                        	}
                        	
                        }?></b></li>
                        <li class="divider"></li>
                        <li><a href="#" class="add" role="button"><i class="fa fa-user-plus" aria-hidden="true">Ajouter</i></a><a href="#" class="mp" role="button"><i class="fa fa-paper-plane" aria-hidden="true">Message Privé</i></a></li>
                      </ul>
                    </div>
		<p class="msg"><?php echo $row['msg']; ?> <span class="fa fa-clock-o" 
 style="float: right; color:#A0522D; font-size: 11px;"> <?php echo formatDate($row['date']); ?></span> </p>
		
	</div>
			
<?php endwhile; ?>

