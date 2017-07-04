<?php
  class Article{
			private  $id;
			private $title ;
			private $description;	
			private $prix;
			private $idcatalogue;

			public function getId(){
				return $this->id;
			}
			public function setId($value){
				$this->id=$value;
				
			}
			public function getTitle(){
				return $this->title;
			}
			public function setTitle($value){
				$this->title=$value;
				
			}
			public function getDescription(){
				return $this->description;
			}
			public function setDescription($value){
				$this->description=$value;
				
			}
			public function getPrix(){
				return $this->prix;
			}
			public function setPrix($value){
				$this->prix=$value;
	
			}
			public function getIdCatalogue(){
				return $this->idcatalogue;
			}
			public function setIdCatalogue($value){
				$this->idcatalogue=$value;
	
			}
				public  static function AllArticle(){
						$req="SELECT * FROM aricles";
						$execut=mysql_query($req);
						$tab=mysql_fetch_array($execut);
						return $tab;
					}
				public function AjoutArticle(){
					echo $req="INSERT INTO articles (title, description, prixarticle,  idcatalogue) 
					VALUES ('$this->title', '$this->description', $this->prix, $this->idcatalogue)";
					$execut=mysql_query($req);
					if($execut==true){
						echo'insertion reusie';
					}else{
						echo'erreure';
					}
					
					
					
				}
				
				
}
?>