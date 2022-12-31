<?php include('connexion.php')?>
<style>
    body{
        margin-left: 37%;
    }
   .formulaire{
    margin-top:40px;
    height:auto;
    width:400px;
    border-radius:10px;
    padding-top:20px;
    font-family:arial;
    background: rgb(190,23,88);
    background: linear-gradient(0deg, rgba(190,23,88,1) 0%, rgba(220,100,68,1) 83%);
    display:flex;
    align-items:center;
    flex-direction: column;
    color:white;
   }
   h4{
    color:white;
    font-size:20px;
    text-align:center;
    font-weight:bold;
   }
   hr{
    color:white;
    width:250px;
   }
   .formulaire p{
    font-weight:bold;
    font-size:17px;
    color:white;
   }
   select{
    display:block;
    height:36px;
    width:170px;
    background-color: white;
    padding-left:17px;
    border-radius:3px;
    margin-top:5px;
    margin-bottom:10px;
    border:none;
   }
   .input{
    display:block;
    height:36px;
    width:270px;
    background-color: white;
    padding-left:17px;
    border-radius:3px;
    margin-top:5px;
    margin-bottom:10px;
    border:none;
   }
   .register{
    background: rgba(220,100,68,1);
    height:40px;
    width:90px;
    border-radius:5px;
    border:none;
    color:white;
    font-size:15px;
    margin-left:90px;
   }
   .two{
    margin-left:200px;
}
.left{
    position:fixed;
    left:0;
    top:0;
    bottom:0;
    width:170px;
    background: rgb(190,23,88);
    background: linear-gradient(0deg, rgba(190,23,88,1) 0%, rgba(220,100,68,1) 83%);
}
ul li{
    list-style: none;
    margin-top: 40px;
    margin-bottom: 40px;
}
a{
    text-decoration: none;
    color:white;
    font-size:17px;
    font-weight:bold;
    font-family:arial;
}
</style>
<html>
<div class="left">
        <ul>
            <li><a href="nouveau.php">Nouveau</a></li>
            <li><a href="detail.php">Modifier</a></li>
            <li><a href="detail.php">Supprimer</a></li>
            <li><a href="recherche.php">Recherche</a></li>
            <li><a href="index.php">Liste des Conatacts</a></li>
        </ul>
    </div>
<div class="formulaire">
    <h4>Nouveau Contact</h4>
    <hr>
<form method="post" action="det.php">
   <p>Nom</p>
   <input type="text" class="input" name="nom"><br>
   <p>Prenom</p>
   <input type="text" class="input" name="prenom"><br>
   <p>Profession</p>
   <input type="text" class="input" name="profession"><br>
   <p>Ville</p>
   <select name="ville">
   <?php
         $requette="select * from ville";
         $res=mysqli_query($link,$requette);
         while($row=mysqli_fetch_assoc($res)){
            echo '<option value="'.$row['id_ville'].'">'.$row['lib_ville'].'</option>';
         }
   ?>
   </select>   
   <p>Telephone</p>
   <input type="text" class="input" name="telephone"><br>
   <p>Mail</p>
   <input type="email" class="input" name="mail"> 
   <p>Adresse</p>
   <input type="text" class="input" name="adresse"><br>
   <p>Photo</p>
   <input class="file" type="file"  name="image"></input><br><br>
   <input type="submit" class="register" value="Enregistrer" name="modifier">
   <input type="submit" class="register" value="Supprimer" name="supprimer">
</form>
</div>
</html>

