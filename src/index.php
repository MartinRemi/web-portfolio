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

			// ----- CONTENT
			// We have to choose content depending on
			// the parameters given to the page
			require('templates/content.php');

			// ----- FOOTER
			require('templates/footer.php');
		?>
	</body>
</html>
