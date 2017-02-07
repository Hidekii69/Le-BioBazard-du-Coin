<?php  
	require "config.php"
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD)
	extract($_POST);
	$sql = "INSERT INTO comment (pseudo,url,mail,contenu,news_id) VALUES ('$pseudo','$url','$mail','$contenu','$news_id')";
	$req= mysql_query($sql) or die ('Erreur SQL ! <br/>'.sql."<br/>".mysql_error());
	header ("location : Article.php?id=$news_id");
?>
