<?php
	foreach($news as $n) {
		echo '<blockquote>';
		echo $n->title . '<br />';
		echo '<small> - By ' . $n->id_author . ' the ' . $n->date . '</small><br />';
		echo $n->content;
		echo '</blockquote>';
	}
?>