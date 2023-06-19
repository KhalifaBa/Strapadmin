<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Strapadmin - Tarifications</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    
    <link href="./css/default.css" rel="stylesheet">
    <link href="./css/default-responsive.css" rel="stylesheet">
    
    <link href="./css/plans.css" rel="stylesheet">   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="./">
				Strapadmin				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Paramètres
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Compte</a></li>
							<li><a href="javascript:;">Confidentialité</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Aide</a></li>
						</ul>
						
					</li>
			
					<li class="dropdown">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							Jérémy
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Profil</a></li>
							<li><a href="javascript:;">Mes groupes</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Déconnexion</a></li>
						</ul>
						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Rechercher...">
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    
    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li>
					<a href="./">
						<i class="icon-home"></i>
						<span>Dashboard</span>
					</a>	    				
				</li>
				
				<li>
					<a href="./faq.html">
						<i class="icon-pushpin"></i>
						<span>FAQ</span>
					</a>	    				
				</li>
				
				<li class="active">					
					<a href="pricing.php" class="dropdown-toggle">
						<i class="icon-th-large"></i>
						<span>Tarifs</span>
					</a>	  				
				</li>

                <li>
                    <a href="panier.php">Panier</a>
                </li>
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-share-alt"></i>
						<span>Plus de page</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="./account.html">User Account</a></li>
						<li class="divider"></li>
						<li><a href="./login.html">Login</a></li>
						<li><a href="./signup.html">Signup</a></li>
						<li><a href="./error.html">Error</a></li>
					</ul>    				
				</li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-th-large"></i>
						<h3>Choix de la formule</h3>
					</div> <!-- /widget-header -->

					<div class="widget-content">
						
						<div class="pricing-plans plans-4">
<?php
include_once 'C:\xampp\htdocs\Strapadmin\connexion.php';
$req = mysqli_query($con,"SELECT * FROM formule");
while ($row=mysqli_fetch_assoc($req)){
?>
						<div class="plan-container">
					        <div class="plan">
                                <form method="post">
						        <div class="plan-header">
					                
						        	<div class="plan-title">
                                        <?=$row['nom']?>
					        		</div> <!-- /plan-title -->
					                
						            <div class="plan-price">
					                	<span class="note">€</span><?=$row['prix']?><span class="term">par mois</span>
									</div> <!-- /plan-price -->
									
						        </div> <!-- /plan-header -->	        
						        
						        <div class="plan-features">
									<ul>
										<li><strong>Inclus</strong> <?=$row['nb_page']?> pages</li>
									</ul>
								</div> <!-- /plan-features -->
								
								<div class="plan-actions">				
									<a href="ajouter_panier.php?id=<?=$row['id']?>" class="btn">Ajouter au panier</a>
								</div> <!-- /plan-actions -->
                                </form>
							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->
<?php
}
?>
				
				
					</div> <!-- /pricing-plans -->
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->					
				
		    </div> <!-- /span12 -->     	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->

    


<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
				
    			<div class="span3">
    				
    				<h4>Communauté</h4>
    				
    				<ul>
    					<li><a href="javascript:;">Foursquare</a></li>
    					<li><a href="javascript:;">Twitter</a></li>
    					<li><a href="javascript:;">Facebook</a></li>
    					<li><a href="javascript:;">Google+</a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    			<div class="span3">
    				
    				<h4>Support</h4>
    				
    				<ul>
    					<li><a href="javascript:;">Consectetur adipisicing</a></li>
    					<li><a href="javascript:;">Eiusmod tempor </a></li>
    					<li><a href="javascript:;">Fugiat nulla pariatur</a></li>
    					<li><a href="javascript:;">Officia deserunt</a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    			<div class="span3">
    				
    				<h4>Documents</h4>
    				
    				<ul>
    					<li><a href="javascript:;">Consectetur adipisicing</a></li>
    					<li><a href="javascript:;">Eiusmod tempor </a></li>
    					<li><a href="javascript:;">Fugiat nulla pariatur</a></li>
    					<li><a href="javascript:;">Officia deserunt</a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    			<div class="span3">
    				
    				<h4>Paramètres</h4>
    				
    				<ul>
    					<li><a href="javascript:;">Consectetur adipisicing</a></li>
    					<li><a href="javascript:;">Eiusmod tempor </a></li>
    					<li><a href="javascript:;">Fugiat nulla pariatur</a></li>
    					<li><a href="javascript:;">Officia deserunt</a></li>
    				</ul>
    				
    			</div> <!-- /span3 -->
    			
    		</div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div> <!-- /extra -->


    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2012 <a href="http://www.kitgraphique.net">Kitgraphique.net</a> & SausauRJ
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery.js"></script>

<script src="./js/bootstrap.js"></script>
<script src="./js/base.js"></script>

  </body>
</html>
