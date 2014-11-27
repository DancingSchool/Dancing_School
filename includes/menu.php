		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<a href="index.php" class="navbar-brand">Dancing School</a>
			
				<button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHedaerCollapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<!-- To mak this part of the menu to get collaspe when we view that in mobile devices -->
				<div class="collapse navbar-collapse navHedaerCollapse">
<<<<<<< HEAD
					<ul class="nav navbar-nav navbar-right col-md-3">
						<li> <p class="btn btn-primary col-md-12">Loggin us: <?php echo $_SESSION["username"];?></p></li>
=======
					<ul class="nav navbar-nav navbar-right">
						<li> <p class="btn">Loggin us: <?php echo $_SESSION["username"];?></p></li>
>>>>>>> FETCH_HEAD
						<a href ='process-logout.php'class='btn btn-info'>Logout</a>
					</ul>
				</div>
			</div>
		</div>