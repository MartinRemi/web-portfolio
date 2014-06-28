<header>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">

			<!-- LOGO -->
			<div class="navbar-header">
				<a href="index.php">
					<?php
						echo '<img src="' . $LOGO . '" alt="' . $LOGO_ALT . '" width="50" />';
					?>
				</a>
			</div>
			
			<!-- Used when collapsing -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Drop-down language -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-home"></span>
							<?php
								echo $HEADER_MENU_INDEX;
							?>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-user"></span>
							<?php
								echo $HEADER_MENU_PROFILE;
							?>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon">
								<img src="images/flaskSprite.png" width="16"/>
							</span>
							<?php
								echo $HEADER_MENU_LAB;
							?>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-briefcase"></span>
							<?php
								echo $HEADER_MENU_PROJECTS;
							?>
						</a>
					</li>
					<li>
						<a href="index.php?page=contact">
							<span class="glyphicon glyphicon-envelope"></span>
							<?php
								echo $HEADER_MENU_CONTACT;
							?>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-globe"></span>
							<?php
								echo $HEADER_MENU_LANGUAGE;
							?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>
</header>
