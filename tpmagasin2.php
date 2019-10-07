<?php
if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['adresse'])&&isset($_POST['ville'])&&isset($_POST['codepostal'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$adresse=$_POST['adresse'];
	$ville=$_POST['ville'];
	$codepostal=$_POST['codepostal'];
try{
	$bdd=new PDO('mysql:host=localhost;dbname=client;charset=utf8','root','');
	}
catch(Exception $e)
{
	die("Erreur :".$e->getMessage());
}	
$req=$bdd->prepare("INSERT INTO contact(nom,prenom,adresse,ville,codepostal) VALUES(:n,:p,:a,:v,:c)");//insertion des données recup dans le formu html
$req->execute(array('n'=>$nom,'p'=>$prenom,'a'=>$adresse,'v'=>$ville,'c'=>$codepostal));//attribution des valeurs
$reponse=$bdd->query("SELECT * FROM contact ORDER BY nom ASC");//selection des données de la bd
echo "<table><thead><tr> <th> Nom </th> <th> Prenom </th> <th> Adresse </th><th> Ville </th><th> Code Postal</th> </tr></thead>
	<tbody>";
while ($donnees=$reponse->fetch()){//affichage des données dans un tableau 
	 echo"<tr> <td>".$donnees['nom']."</td> <td>".$donnees['prenom']."</td> <td> ".$donnees['adresse']."</td><td> ".$donnees['ville']."</td><td> ".$donnees['codepostal']."</td> </tr>";
}
echo "</tbody>";
echo "</table>"; 
$reponse->closeCursor();
}

?>