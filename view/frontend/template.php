<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jean FORTEROCHE</title>
        <link href="http://localhost/projet4/public/css/style.css" rel="stylesheet" />        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>   
    <body>
    	<header>
	    	<nav class="navbar navbar-default navbar-fixed-top">
	    		<div class="navbar-header">
	    			<a class="navbar-brand" href="http://localhost/projet4/index.php">Billet simple pour l'Alaska</a>
	 			</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="http://localhost/projet4/index.php">Accueil</a> </li>
		            <li> <a href="http://localhost/projet4/index.php?action=listPosts">tous les chapitres</a> </li>
		            <li> <a href="http://localhost/projet4/view/frontend/auth.php">s'identifié</a> </li>
		            <li> <a href="http://localhost/projet4/view/backend/admin.php">administration</a> </li>             
		          </ul>          
		        </div>
	      	</nav>
	    </header> 
	    <div>
        	<?= $content ?>        	
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>