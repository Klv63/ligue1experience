<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/style.css" />


    <title>Ligue 1 experience</title>
</head>
<div>
    <header>
        <div class="top-header">
            <div class="logo">
                <img src="assets\logo.png" alt="logo" href="logo" />
            </div>
            <div class="nav">
                <a href="#">Accueil</a>
                <a href="#">Club</a>
                <a href="#">Statistiques</a>
                <a href="#">News</a>
                <a href="#">Boutique</a>
                <div class="form">
                    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Recherche" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <button onclick="document.getElementById('id01').style.display='block'"
                        style="width:auto;">Connection</button>
                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                    title="Close Modal">&times;</span>
                                <img src="assets\trophee.png" alt="Avatar" class="avatar">
                            </div>

                            <div class="container">
                                <label for="uname"><b>Nom</b></label>
                                <input type="text" placeholder="Entrer nom" name="uname" required>

                                <label for="psw"><b>Mot de passe</b></label>
                                <input type="password" placeholder="Entrer mot de passe" name="psw" required>

                                <button type="submit">connection</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
                                </label>
                            </div>
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                    class="cancelbtn">annuler</button>
                                <span class="psw">Oublier <a href="#">mot de passe?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </header>