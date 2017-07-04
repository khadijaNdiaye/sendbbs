<?php


  class Catalogue{
			private  $id;
			private $desicatalogue ;
				

			public function getId(){
				return $this->id;
			}
			public function setId($value){
				$this->id=$value;
				
			}
			public function getDesicatalogue(){
				return $this->desicatalogue;
			}
			public function setDesicatalogue($value){
				$this->desicatalogue=$value;
				
			}
			
			
				public function AjoutArticle(){
					$req="INSERT INTO articles (desicatalogue) 
					VALUES ('$this->desicatalogue')";
					$execut=mysql_query($req);
					
  }
			public  static function AllCatalogue(){
						$req="SELECT * FROM catalogue";
						$execut=mysql_query($req);
						$tab=mysql_fetch_array($execut);
						return $tab;
					}
						
}
?>