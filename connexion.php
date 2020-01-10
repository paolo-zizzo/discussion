<html>
<link rel="stylesheet" href="discussion.css"/>

<body class="form">
<div class="form-style-8">
    
    
<h2>connexion:</h2>    

<form class="formulaire" name="connexion" method="post" action="connexion.php">
Entrez votre pseudo : <input type="text" required  name="login"/> <br/>
        Entrez votre mot de passe : <input type="password" required name="password"/><br/>

        <input type="submit" name="valider" value="OK"/>
    </form>

    <?php

if(isset ($_POST['valider']))
{
    

    session_start();
    $db=mysqli_connect("localhost","root","","discussion");
    $login=$_POST['login']; 
    $pass=$_POST['password'];
    $requete1="SELECT password  FROM `utilisateurs`WHERE login='$login' and password='$pass'";
    $query= mysqli_query ($db,$requete1);
    $resultat=mysqli_num_rows($query);

    
    
        if ($resultat==0){
        echo "mot de passe ou login incorrect" ;
        echo '<br>';
?>
<a href="inscription.php"> inscrivez vous ici </a>

    <?php    
    }
    else
    {
        $_SESSION['message']="bienvenue :)";

    $_SESSION['login']=$login;
    $_SESSION['password']=$_POST['password'];
    header('location: index.php');
}

}




