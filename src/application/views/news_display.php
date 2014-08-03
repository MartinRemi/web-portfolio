<?php
	if(count($news) == 0)
		echo 'No News to render';
	foreach($news as $n) {
		echo $n->title . '<br />';
		echo '<small> - By ' . $n->id_author . ' the ' . $n->date . '</small><br />';
		echo '<blockquote>';
		echo $n->content;
		echo '</blockquote>';
		echo '<hr />';
	}
?>