<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd%22%3E">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/corps.css");
        </style>

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

    <form action="./?action=connexion" method="POST">

        <div class="input-form">
            <input type="text" name="email" id="email" placeholder="Email" />
        </div>

        <div class="input-form">
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
        </div>

        <div class="submit-form">
            <button type="submit">Connexion</button>
        </div>


    </form>

    <a href="./?action=FormInsc"> S'inscrire

    </center>