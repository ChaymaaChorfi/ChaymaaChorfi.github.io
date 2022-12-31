<style>
th,td{
    height:50px;
    width:75px;
    border:2px solid black;
    text-align:center;
}
th{
    
    background: rgb(190,23,88);
    background: linear-gradient(0deg, rgba(190,23,88,1) 0%, rgba(220,100,68,1) 83%);
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
.two{
    margin-left:200px;
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
    <div class="two">
<table>
<tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Prefession</th>
    <th>Ville</th>
    <th>Tel</th>
    <th>Mail</th>
    <th>Adresse</th>
    <th>Photo</th>
</tr>
<?php include('connexion.php') ?>
<?php
session_start();
$login=$_SESSION['login']; 
$requette="select *from contact where user='".$login."'" ;
$res=mysqli_query($link,$requette);
while($row=mysqli_fetch_assoc($res)){
    $req="select lib_ville from ville where id_ville='".$row['id_ville']."'";
    $resu=mysqli_query($link,$req);
    $row2=mysqli_fetch_assoc($resu);
    echo '<tr>';
    echo '<td>'.$row['nom'].'</td>' ;
    echo '<td>'.$row['prenom'].'</td>' ;
    echo '<td>'.$row['profession'].'</td>' ;
    echo '<td>'.$row2['lib_ville'].'</td>' ;
    echo '<td>'.$row['tel'].'</td>' ;
    echo '<td>'.$row['mail'].'</td>' ;
    echo '<td>'.$row['adresse'].'</td>' ;
    echo '<td>'.$row['photo'].'</td>' ;
    echo '<tr>';
}

?>

</table>

    </div>
</html>