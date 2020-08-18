

<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$db="chat";
$username="";
$password1="";
$email="";
$errors=array();

$con=mysqli_connect($host,$dbusername,$dbpassword,$db);

//signupform

      
if(isset($_POST["register"]))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password1=mysqli_real_escape_string($con,$_POST['password1']);
	$password2=mysqli_real_escape_string($con,$_POST['password2']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$age=mysqli_real_escape_string($con,$_POST['age']);
$situation=mysqli_real_escape_string($con,$_POST['situation']);
 $query1 = "SELECT * FROM login ";
						$run1 = $con->query($query1);
                        while ($row1 = $run1->fetch_array()) {
                        	if ( $row1['username']==$username) {
                        		   array_push($errors, "Surnom déja existe! Utiliser un autre Surnom");
                        	}
                        	
                        }

	if(empty($username) )
	{
		array_push($errors, "Entrer Votre Surnom");
	}
	if(empty($age))
	{
		array_push($errors, "Enter votre age");
	}


	if(empty($password1) or (strlen($password1)<5))
	{
		array_push($errors, "Le mot de passe doit être de 6 caractères minimum!");
	}

	if($password1!=$password2)
	{
		array_push($errors, "Les deux mots de passe ne sont pas identiques!");
	}
	function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip=getUserIpAddr();

	if(count($errors)==0)
	{
		//$password=mds($password1); //encrypt password
		$sql="INSERT INTO login (username,password,gender,age,situation,ip) VALUES ('$username','$password1','$gender','$age','$situation','$ip')";
		mysqli_query($con,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="Vous avez déja connecté";
		header("location: home.php");
	}
}
// log user in from login page
if(isset($_POST['login']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password1=mysqli_real_escape_string($con,$_POST['password1']);

	if(empty($username))
	{
		array_push($errors, "Surnom n'existe pas! Vérifier le Surnom ou créer une compte.");
	}

	if(empty($password1))
	{
		array_push($errors, "Mot de passe incorrect!");
	}

	if(count($errors)==0)
	{
		$query="SELECT * FROM login WHERE username='$username' AND password='$password1'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['username']=$username;
			$_SESSION['success']="connecté avec succés";
			header("location: home.php");
		}
		else
		{
			array_push($errors, " Surnom ou Mot de passe incorrect! ");
		}
	}

}
//logout

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}
?>