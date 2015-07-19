<?php
/*
*	Format the Date
*/

function formatDate($date){
	return date("F j, Y, g:i a",strtotime($date));
}

/*
*	Format the text
*/

function shortenText($text, $chars = 450){	//450 will be default for char if no input
	$text = $text." ";	//appends a space to text	
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strrpos($text, ' ')); //find position of the closest space
	$text = $text."..."; //appends ... as formatting and to allow users to click and be redirecte
	return $text;
}	
	