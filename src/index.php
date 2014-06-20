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

			// ----- CONTENT
			// We have to choose content depending on
			// the parameters given to the page

			// ----- FOOTER
			require('templates/footer.php');
		?>
	</body>
</html>
