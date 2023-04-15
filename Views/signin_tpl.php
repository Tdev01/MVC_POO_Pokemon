<?php
include('header_tpl.php');
?>
        <h1> bienvenue sur la page de d'inscription</h1>
        <div id='container_form'>
            <form action="Signin/record" method="POST"><br>
                <label for='firstname'>Prenom</label><br>
                <input type="text" name='firstname'><br>

                <label for='lastname'>Nom</label><br>
                <input type="text" name='lastname'><br>

                <label for='nickname'>Pseudo</label><br>
                <input type="text" name='nickname'><br>
                
                <label for='password'>Mot de passe</label><br>
                <input type="password" name='password'><br>
                <button type='submit'>OK</button><br>
            </form>  
        </div>

<?php
include('footer_tpl.php');
?>