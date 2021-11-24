<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd%22%3E">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <center>

    <!--<form action= "./?action=Modmdp" method="POST">-->
    <form action= <?php echo "./?action=Modmdp&NomEleve=".$_GET["NomEleve"]?> method="POST">


        <div class="input-form">
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
        </div>

        <div class="submit-form">
            <button type="submit">Modifier</button>
        </div>


    </form>

    </center>