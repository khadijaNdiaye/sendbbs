<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zone admin base de données</title>
</head>

<body>
</body>
</html>
<?php
if(isset($_GET['login'])&& isset($_GET['password'])){ 
include "connexion.php";
$login=$_GET['login'];
$password=$_GET['password'];
if((isset($login)&& isset($password))){
	if(($login=="")&&($password=="")){
echo 'connecte';

}else{
    echo 'login ou mot de passe incorrecte';
	}
}
else
{
	echo 'champs manquant';
}
}
?>