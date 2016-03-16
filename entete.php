<?php
	session_start();
	if (isset($_SESSION['U_Mail'])){
		$est_connecte = true;
	}
	else{
		$est_connecte = false;
	}
?>
		
		<div class='col-lg-11'>	
			<div>
				<nav class='navbar navbar-default col-lg-12'>
				  <div class='container-fluid'>
					<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
					  <ul class='nav navbar-nav col-lg-12'>
						<li><a href='#'>Accueil</a></li>
						<li><a href='#'>Mes offres</a></li>
						<li><a href='#'>FAQ</a></li>
					<?php
							if ($est_connecte){
								echo "
									<li class='dropdown  navbar-right'>
										<a href='#' class='dropdown-toggle col-lg-12' data-toggle='dropdown' role='button' aria-expanded='false'>Mon compte 
											<span class='caret'></span>
										</a> 
										<ul class='dropdown-menu' role='menu'>
											<li>
												<a href='#'>Paramètres</a>
											</li>
											<li>
												<a href='scriptdeconnexion.php'>Se déconnecter</a>
											</li>
										</ul>
									</li>";
							}
							else{
								echo "<li class='navbar-right' >
										<a href='connexion.php' class='col-lg-12'>Connexion</a>
									</li>";
							}
						?>
</ul>
					</div>
				  </div>
				</nav>
			</div>
		</div>