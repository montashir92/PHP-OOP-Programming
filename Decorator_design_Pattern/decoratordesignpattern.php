
// Decorator design Pattern in PHP.

<?php

spl_autoload_register(function($class_name){
    include "classes/".$class_name. ".php";
});

$post = new Post();
$comment = new Comment();
$post->filter();
$comment->filter();

if($BBCodeEnabled == false && $EmoticonEnabled == false){
	$postContent = $post->getContent();
	$commentContent = $comment->getContent();
}elseif($BBCodeEnabled == true && $EmoticonEnabled == false){
	$bb = new BBCodeParser($post);
	$postContent = $bb->getContent();
	
	$bb = new BBCodeParser($comment);
	$comContent = $bb->getContent();
	
}elseif($BBCodeEnabled == false && $EmoticonEnabled == true){
	$em = new Emoticon($post);
	$postContent = $em->getContent();
	
	$bb = new Emoticon($comment);
	$comContent = $bb->getContent();
}


?>