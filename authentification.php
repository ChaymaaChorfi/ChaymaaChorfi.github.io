<?php   include('connexion.php')?>
<style>
    body{
        margin-left: 37%;
    }
   .formulaire{
    margin-top:100px;
    height:400px;
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
    margin-top:27px;
    background: rgba(220,100,68,1);
    height:40px;
    width:120px;
    border-radius:5px;
    border:none;
    color:white;
    font-size:15px;
    margin-left:70px;
   }
</style>
<html>
<div class="formulaire">
    <h4>Se Connecter</h4>
    <hr>
<form method="post" action="authen_traitement.php">
   <p>Login</p>
   <input type="text" class="input" name="login">
   <p>Password</p>
   <input type="text" class="input" name="password">
   <input type="submit" class="register" value="se connecter" name="connecter">
</form>
</div>
</html>