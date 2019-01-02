<?php ob_start(); ?>

<form action="http://localhost/projet4/index.php" method="post"> 
	<input type="text" name="pseudo" /> 
	<input type="password" name="pass" /> 
	<input type="submit" value="s'identifier" />
</form> 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>