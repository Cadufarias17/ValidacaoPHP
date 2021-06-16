<?php    
    $link = mysqli_connect('127.0.0.1', 'root', '', 'bd-validacao-php');
	mysqli_query($link, "SET NAMES 'utf8'");
	mysqli_query($link, 'SET character_set_connection=utf8');
	mysqli_query($link, 'SET character_set_client=utf8');
	mysqli_query($link, 'SET character_set_results=utf8');
?>