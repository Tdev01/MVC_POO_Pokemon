<style>
    body{
        background-image: url("https://img.freepik.com/free-vector/battle-versus-vs-background-sports-game_1017-23766.jpg?w=826&t=st=1681289219~exp=1681289819~hmac=a7d0884e881567c9ae21a65c2f57ed83fd3c19062db3b6e4f33872c248337c3d");
        background-size: cover;
    }
</style>
<?php
require('Models/Pokemon.php');

$pikachu = new pokemon('pikachu', 10 , 5 , 'electrik');

$carapuce = new pokemon('carapuce', 15 , 3 , 'eau');

while($pikachu->getPv() != 0 && $carapuce->getPv() != 0) {
    flush();
    $pikachu->attaque($carapuce);
    sleep(1);
}

$carapuce->BoitPotion();
var_dump($carapuce);

?>
<?php
include('footer_tpl.php');
?>





