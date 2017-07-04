<?php
session_start();
?>
<?php
include_once "Configdb.php";
if(isset($_POST['Valider'])){
$user=$_POST['login'];
$password= $_POST['password'];
if(!isset($user)){
	echo ("Veuillez enrer votre login");

}else{
	if(!isset($password)){
		echo " veuillez entrer votre mot de passe ";
		
	}else{
		$db=new PDO("mysql:host=localhost;dbname=sendeal", "root", "");
		$users= $db->query("SELECT * FROM `user` WHERE `login`= '$user'")->Fetch();
		if(count($users)>1){
			
			if(sha1($password)== $users['password']){
				$_SESSION['AUTHENTIFICATION']=$users;
				
				header('Location:admin.php');
				
			}else{
			echo 'login et mot de passe incorrecte';	
			}
				
		}
			//var_dump($users);
	}
}
}
?>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link href="boostrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>
	<link href="bootstrap/css/style.css" type="text/css" rel="stylesheet"/>
<body>
<form action="" method="POST">
<div class="wrap">
		<div class="avatar">
      <img src="http://cdn.ialireza.me/avatar.png">
		</div>
		<input type="text" name="login" placeholder="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="password" placeholder="password" required>
		<a href="" class="forgot_link">forgot ?</a>
		<input type="submit" name="Valider">
		<button class="btn btn-primary"><a href="inscription.php">INSCRIPTION</a>
	</div>
</form>
    <script src="boostrap/js/index.js"></script>	</br>

</body>
</html>

