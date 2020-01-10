<?php session_start(); ?>
<html>

	<head>
		<title>accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="discussion.css"/>
        </head>



<?php

if(isset($_POST['deco']))
        {
                unset($_SESSION['login']);
                unset($_SESSION['password']);
        }   

if(isset($_SESSION['login']))
{
           



?>

	<body class="bodyaccdeco">
                <header>

                <ul class="menu">


                <?php
                

                       
                        

                        
       
                       
                        
                                echo $_SESSION['message'];


                        ?>
                        <li><a class="a" href="profil.php">modifier profil</a></li>   
                        <li><a class="a" href="discussion.php">ajoutez un message</a></li>    
 
                        <form method="post" action="index.php">
                                <input class="bouton" type="submit" value="deconnexion" name="deco">   
                        </form>

                        <?php
                          
                        ?>
	                </ul>
                        </header>
                        


        

         </section>
                <h1 class ="maintitre"></h1>
                        <section class="accueil"></section>  
                        <br>
                        <p id ="disdeco">Retrouvez toute nos infos sur la NBA, échangez avec les autres grâce à l'onglet "ajouter un message".</p>

  <article class="imgarticle1">
  <a href="https://basket-infos.com/2020/01/10/defense-leads-to-offense-les-wolves-ecrasent-portland/">
<img  src="nbainfo.PNG" width="400px" height="140px"></a>
<a href="https://basket-infos.com/2020/01/10/blowout-time-a-okc-le-thunder-ne-fait-quune-bouchee-de-houston-pour-les-retrouvailles-cp3-rockets-russ-thunder/">
<img src="nbainfo2.PNG" width="400px" height="140px"></a>
</article>


                <?php
}
else
{ 


        
        
        ?>
                <body class="bodyaccdeco">


<header>


        <ul class="menu">

        <li><a class="a1" href="connexion.php">connexion</a></li>
       <li><a class="a1" href="inscription.php">inscription</a></li>
       <li><a class="a1" href="discussion.php">discussion</a></li></ul></header>


        
     
        <img class="gif" src="23.gif">


</main>

       <section class="accueildeco">
<p>
partagez avec nous l'ensemble des infos de la NBA,débattez sur les matchs passés et à venir...<br>


</p>

       







</body>

     <?php   
}

?>
                
                        
                                        </html>

