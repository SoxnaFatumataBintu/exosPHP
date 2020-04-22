<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>formulaire</title>
    </head>

    <body>

    <form name="djiby" action="djiby.php" method="POST">
        Saisir une valeur : <input type="text" name="valeur" />
        <input type="submit" value="valider" />
    </form>

    </body>
</html>

<?php  
    echo "la saisie est : ".$_POST['valeur'];
?>
