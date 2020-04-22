<!DOCTYPE HTML>
<html>
	<head>
    <meta charset="utf-8">
    <title>page4</title>

	</head>
	        <body>
                <form name="4" method="post" action="">
                <span class="color">
                     matricule: <input type="valeur" name="matricule" /> <br/> <br/>
                     

                        nom: <input type="text" name="nom"/> <br/> <br/>
                         prenom: <input type="text" name="prenom"/> <br/><br/>
                         sexe ?<br/><br/>
                        <input type="radio" name="sexe" value="masculin" id="feminin" checked="checked" /> <label for="masculin">masculin</label>
                        <input type="radio" name="sexe" value="feminin" id="feminin" /> <label for="feminin">feminin</label>
                        <br/><br/>adresse 
                        <br/><br/><textarea name="adresse" rows="8" cols="20" > 
                            
                        </textarea> <br/> <br/>
                        service <br/> <br/>
                        <select name="service">
    <option value="choix1">Choisir</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select> <br/>
fonction <br/> <br/>
<select name="fonction">
    <option value="choix1">Choisir</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>
                        <input type="submit"  value="envoyer"/>
                </form>
                <style type= "text/css">
                .color {
                        background-color= pink;
                        text-transform:uppercase;
                }
                </style>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>matricule</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </body>
</html>