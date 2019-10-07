<!DOCTYPE html>
<html lang="fr">

<head>
        <title>allo film</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                crossorigin="anonymous">
        <link rel="stylesheet" href="base.css" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>

<body>
        <div>
                <nav class="navbar navbar-laght bg-dark" name="nav">
                        <a>
                                <h1 span style="color : white"><strong>Mediathèque</h1>
                        </a>
                        <a class="navbar-brand" href="film">Film</a>
                        <a class="navbar-brand" href="creer_film">Ajouter film</a>
                        {if isset($smarty.session.user)}
                        <a class="navbar-brand" href="deconnection">Déconnexion</a>
                        {else}
                         <a class="navbar-brand" href="connection">Connexion</a>
                         {/if}
                        <a class="navbar-brand" href="inscription">Inscription</a>
                </nav>

        </div>

        <body>