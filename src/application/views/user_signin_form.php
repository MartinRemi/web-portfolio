<?php
	if($signin_input_error != "") {
		echo $error_encountered_errors . ' <ul>' . $signin_input_error . '</ul>';
	}
?>
<form method="post" action="<?php echo $this->config->base_url(); ?>index.php/user/signin">
	<fieldset>
		<legend>Sign up form</legend>
		<input type="hidden" name="signin_sent" value="yes">
		<label>Email: </label><input type="mail" name="email"><br />
		<label>Password: </label><input type="password" name="password"><br />
		<input type="submit" value="Sign in">
	</fieldset>
</form>