<?php
	if($input_error != "") {
		echo $error_encountered_errors . ' <ul>' . $input_error . '</ul>';
	}
?>
<form method="post">
	<fieldset>
		<legend>Sign up form</legend>
		<input type="hidden" name="signup_sent" value="yes">
		<label>Username: </label><input type="text" name="username"><br />
		<label>Email: </label><input type="mail" name="email"><br />
		<label>Password: </label><input type="password" name="password"><br />
		<input type="submit" value="Sign up">
	</fieldset>
</form>