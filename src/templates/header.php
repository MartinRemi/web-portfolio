<header>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<!-- LOGO -->
			<div class="navbar-header">
				<a href="index.php">
					<?php
						echo '<img src="' . $LOGO . '" alt="' . $LOGO_ALT . '" width="50" />';
					?>
				</a>
			</div>

			<!-- Drop-down language -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Index</a></li>
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-user"></span> Profile
						</a>
					</li>
					<li><a href="#">Lab</a></li>
					<li><a href="#">Projects</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php
								echo $LANGUAGE;
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
