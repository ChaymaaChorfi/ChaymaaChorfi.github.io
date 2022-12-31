
<?php include('connexion.php') ?>
<?php 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$profession=$_POST['profession'];
$id_ville=$_POST['ville'];
$telephone=$_POST['telephone'];
$mail=$_POST['mail'];
$adresse=$_POST['adresse'];
if(isset($_FILES['image']) and $_FILES['image']['error']==0)
    {
        $dossier= 'photo/';
        $temp_name=$_FILES['image']['tmp_name'];
        if(!is_uploaded_file($temp_name))
        {
        exit("le fichier est untrouvable");
        }
        if ($_FILES['image']['size'] >= 1000000){
            exit("Erreur, le fichier est volumineux");
        }
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        
        $extension_upload = strtolower($extension_upload);
        $extensions_autorisees = array('png','jpeg','jpg');
        if (!in_array($extension_upload, $extensions_autorisees))
        {
        exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
        }
        $nom_photo=$_POST['nom'].".".$extension_upload;
        if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
        exit("Problem dans le telechargement de l'image, Ressayez");
        }
        $num_photo=$nom_photo;
}
else{
    $num_photo="SANS_IMAGE.jpeg";
}
$requette="delete from contact where nom='".$nom."'";
$res=mysqli_query($link,$requette);
$row=mysqli_fetch_assoc($res);
header('location:index.php');
