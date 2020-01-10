<html>
<link rel="stylesheet" href="discussion.css"/>

<body class="form">
<div class="form-style-8">
    
    
<h2>inscription</h2>    

<form class="formulaire" name="inscription" method="post" action="inscription.php">

<?php
if(isset ($_POST['valider']))
{
    $db=mysqli_connect("localhost","root","","discussion");
    $login=$_POST['login']; 
    $requete1="SELECT * FROM `utilisateurs`WHERE login='$login'";
    $query= mysqli_query ($db,$requete1);
    $resultat=mysqli_num_rows($query);

if(($resultat>0)||($_POST['password']!=$_POST['password1']))
{
    if ($resultat>0){ ?> <div class="erreur1">
        <?php
         echo  "cet utilisateurs est déjà utilisé";
         ?>
         </div>
         <?php
         }
         
         if($_POST['password']!=$_POST['password1'])?> <div class="erreur1"> <?php
         {
            echo "les mots de passes sont pas identiques";?></div>
            <?php
         }
  
    
}
else{
   
    $requete='INSERT INTO
     `utilisateurs` (`login`, `password`) VALUES ("'.$_POST['login'].'","'.$_POST['password'].'");';
    mysqli_query ($db,$requete);
    mysqli_close($db);
    header('location: connexion.php');
}
}
?>
        Entrez votre pseudo : <input type="text" name="login"/> <br/>
        Entrez votre mot de passe : <input type="password" name="password"/><br/>
        confirmez votre mot de passe : <input type="password" name="password1"/><br/>

        <input type="submit" name="valider" value="OK"/>




    </form></div>



</body>


    
     

    









         

