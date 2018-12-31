<?php
require_once('model/Manager.php');

class PostManager extends Manager
{
	public function getPosts(){
		$db = $this->dbConnect();
		$posts = $db->query('SELECT id, title_news, content_news, DATE_FORMAT(creation_date_news, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_news_fr FROM news ORDER BY creation_date_news DESC LIMIT 0, 5');
		return $posts;
	}
	public function getPost($postId){
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title_news, content_news, DATE_FORMAT(creation_date_news, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_news_fr FROM news WHERE id = ?');
    	$req->execute(array($postId));
    	$post = $req->fetch();
    	return $post;
	}		
}