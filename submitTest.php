<?php

require './functions.php';

$minutes = stringToMinutes($_POST["cronometro"]);


// TODO sql para inserir no bd
echo ceil($minutes);

?>



