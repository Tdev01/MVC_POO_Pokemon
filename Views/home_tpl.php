<?php
include('header_tpl.php');
?>

<div class="main">

    <div id="titre">
    <h1>Bienvenue à toi</h1><br>
    </div>
    <div id="connection">
        <h2>Veuillez-vous connecter</h2><br>

        <form action="Signin/checkUser" method="POST">
            <label for="nickname">Entrer votre prénom</label><br>
            <input type="text" name='nickname' placeholder='nickname'><br>
            <label for="password">Entrer votre password</label><br>
            <input type="password" name='password' placeholder='password'><br>
            <button>Connection</button><br>
        </form>
        <br>
    </div>
    <div id="inscription">
        <h2>Vous n'avez pas de compte enregistrer-vous</h2><br><br>
        <a href='/Signin'>Incription</a><br><br>
    </div>
</div><br>
<?php
include('footer_tpl.php');
?>