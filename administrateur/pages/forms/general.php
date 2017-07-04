<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sendeal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>eal</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SEN</b>Deal</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">nombre de notifications</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have x notifications</li>
              
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/images.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Nom connecté</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/images.png" class="img-circle" alt="User Image">

                <p>
                  SEYDOU GUISSE - MEMBRE DU BBS
                  <small>Directeur----</small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">DECONNEXON</a>
                </div>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/images.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> connecté </p>
          <a href="#"><i class="fa fa-circle text-success"></i>Connecté</a>
        </div>
      </div>
      <!-- search form -->
	  
	  
	  
	  
	  
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
    </section>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        NOUVELLES PROMOTIONS
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pages/forms/admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="general.html">Forms</a></li>
        <li class="active">ENREGISTRER UN ARTICLE</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ENREGISTRER UN ARTICLE</h3>
            </div>
			 <?php
		
		require_once("../../Class/Catalogue.php");
			require_once("../../Class/connexion.php");
		$c=Catalogue::AllCatalogue();
		
		var_dump($c);
	
		
		
		?>
			
			
			
            <form role="form" method="post" action="">
              <div class="box-body">
                <div class="form-group">
				  <label class="control-label" for="input">TITRE DU PRODUIT</label>
                  <input type="text" name="titre" class="form-control" id="Inputproduit">
				  
				  
				  <label for="Inputproduit">DESCRIPTION </br></br>
                  <textarea rows="2" name="description"></textarea></div></>
				  
				  <label for="Inputproduit">PRIX UNITAIRE </label>
                  <input type="text" name="prix" class="form-control" id="Inputproduit">
				  
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">PHOTO</label>
                  <input type="file" id="exampleInputFile"></br>
				  
				  
				  <select class="align-right" name="idCateg" >
				  <?php foreach($c as $p){?>
				<option><strong><?php echo $p->idcatalogue;?></strong></option>
				  <?php } ?>
				</select>
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="ajout">AJOUTER</button>
				<button type="submit" class="btn btn-primary">MODIFIER</button>
				<button type="submit" class="btn btn-primary">SUPPRIMER</button>
				<button type="submit" class="btn btn-primary">LISTER</button>
              </div>
            </form>
          </div>
		   <?php
		if(isset($_POST['ajout'])){
		
		require_once("../../Class/connexion.php");
		require_once("../../Class/Article.php");
		extract($_POST);
		$art=new Article();
		$art->setTitle($titre);
		$art->setDescription($description);
		$art->setPrix($prix);
		$art->setIdCatalogue(1);
		$svg=$art->AjoutArticle();
		
			if($svg==true){
				echo'insertion reusie';
				}else{
				echo'erreure';
				}
		
		}
		?>
            </div>
          </div>
        </div>
        
        </div>
       
		
		
		
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://sendeal.sn">SEYDOU GUISSE </a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
     
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
