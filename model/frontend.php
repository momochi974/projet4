<?php
function getPosts(){
	$db = dbConnect();
	$posts = $db->query('SELECT id, title_news, content_news, DATE_FORMAT(creation_date_news, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_news_fr FROM news ORDER BY creation_date_news DESC LIMIT 0, 5');
	return $posts;
}
function getPost($postId){
	$db = dbConnect();
	$req = $db->prepare('SELECT id, title_news, content_news, DATE_FORMAT(creation_date_news, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_news_fr FROM news WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}
function getComments($postId) {
	$db = dbConnect();
	$comments = $db->prepare ('SELECT id,  author ,comment ,DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, is_signaled FROM comments where news_id = ? ORDER BY comment_date DESC');
	$comments->execute(array($postId));	

	return $comments;
}
function postComment($postId, $author, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comments(news_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}

function dbConnect(){	
	{
	$db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');
	return $db;
	}	
}