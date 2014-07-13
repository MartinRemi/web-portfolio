<?php // TODO: change layout so that it is responsible ?>
<html>
	<!-- Include HEAD -->
	<?php
		require('phpGeneralInclude.php');

		require('lang/' . $LANG . '.php');

		require('templates/head.php');
	?>

	<body>
		<?php
			// ----- HEADER
			require('templates/header.php');

			// ----- BREADCRUMB
			require('templates/breadcrumb.php');
		?>


		<div class="container">
			<div class="row">
				<?php
					if($page != "index") {
						require("templates/" . $page . ".php");
					} else {	
						// ----- MENU
						// DOesn't always appear
						require('templates/menu.php');
	
						// ----- CONTENT
						// Choose the content depending on
						// the parameters given to the page
						require('templates/content.php');
					}
				?>
			</div>
		</div>
			

		<?php
			// ----- FOOTER
			require('templates/footer.php');
		?>
	</body>
</html>
