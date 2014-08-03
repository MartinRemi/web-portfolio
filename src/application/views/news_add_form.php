<?php
	if($news_add_input_error != "") {
		echo $error_encountered_errors . ' <ul>' . $news_add_input_error . '</ul>';
	}
?>
<form method="post" action="<?php echo $this->config->base_url(); ?>index.php/news/add">
	<fieldset>
		<legend>Add news form</legend>
		<input type="hidden" name="news_add_sent" value="yes">
		<label>Title: </label><input type="text" name="title"><br />
		<label>Content: </label><textarea name="content"></textarea><br />
		<input type="submit" value="Add">
	</fieldset>
</form>