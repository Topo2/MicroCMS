<?php 

//return all articles
 function getArticles()
{
	$db = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8','root','');
	$articles = $db->query('select * from t_article order by art_id desc');
	return $articles;
}
?>

