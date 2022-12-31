<?php include('connexion.php')?>
<?php
$login=$_POST['login'];
$password=$_POST['password'];

if (empty($login) or empty($password)){
    header('location:erreur.php');
}
else{
$requette="select *from user where login='".$login."' and pass='".$password."'";
$res=mysqli_query($link,$requette);
$row=mysqli_fetch_assoc($res);
if($row['login']==$login and $row['pass']==$password){
    session_start();
    $_SESSION['login']=$login;
    header('location:index.php');

}
else{
    header('location:erreur.php');
}
}



?>