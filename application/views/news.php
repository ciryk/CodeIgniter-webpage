<?php

foreach($posts as $row){
	echo new Newslib(array('title' => $row->title, 'content' => $row->content, 'date' => $row->date));
}