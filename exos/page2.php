<!DOCTYPE HTML>
<html>
	<head>
    <meta charset="utf-8">
    <title>page2</title>

	</head>
	        <body>
                <form name="page2" method="post" action="page2.php">
                        Entrez la valeur : <input type="text" name="valeur"/> <br/>
                        <input type="submit"  value="envoyer"/>
                </form>
            </body>
</html>


<?php
echo "valeur tape par l'utilisateur: ".$_POST['valeur'];

?>