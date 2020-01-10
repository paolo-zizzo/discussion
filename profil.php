<html>
<link rel="stylesheet" href="discussion.css"/>

<body class="form">
<div class="form-style-8">
    
    <?php
session_start();
?>



<h2>modifiez votre profil</h2>    

<form class="formulaire" name="profil" method="post" action="profil.php">
Entrez votre login: <input type="text" name="login" value="<?php echo $_SESSION ['login'];?>">

        
        
        
        Entrez votre mot de passe: <input type="password" name="password" value="<?php echo $_SESSION['password'];?>">
    
      
        confirmez votre mot de passe : <input type="password" name="password1"value="<?php
        echo $_SESSION['password'];?>"><br/>
        
        <input type="submit" name="valider" value="OK"/>
</form>
<?php

if(isset($_POST['valider']))
{
    

 $db=mysqli_connect("localhost","root","","discussion");
 $newlogin= $_POST['login']; 
 $login= $_SESSION['login']; 
 $password=$_POST['password'];

 $req= "UPDATE utilisateurs SET login = '".$newlogin."', password = '".$password."' WHERE login= '".$login."' ";
 $query= mysqli_query ($db, $req);
 $_SESSION['login']=$newlogin;
 $_SESSION['password']=$password;
 header('location: index.php');
 
}
?>