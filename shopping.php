<?php
require_once('includes/header.php');
require_once('includes/siedebar.php');
$select = $db->prepare("SELECT*FROM articles");
$select->execute();
while($s=$select->fetch(PDO::FETCH_OBJ)){

?>
<h2><?php echo $s-title;?></h2></br>
<h5><?php echo $s->description?></h5></br>
<h5><?php echo $s->prixarticles?></h5></br>
</br></br>

<?php
	
}
require_once('includes/footer.php');
?>