<!-- TOOL PASSWORD GENERATOR -->

<?php

// $letters = "abcdefghijklmnopqrstuvwxyz";
// $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// $numbers = "1234567890";
// $characthers_special = "!?~@#-_+<>[]{}";
// $shfl = str_shuffle($letters . $numbers . $characthers_special . $uppercase);
// $pwd = substr($shfl,0,12);
// echo $pwd . " ";

  function passwordRandom($lunghezza_password) {
    $pass = [];

    // FUNZIONE CONTENETE ARRAY CON TUTTI I POSSIBILI SIMBOLI CHE COMPORRANNO LA PASSWORD FINALE A SECONDA DELLA LUNGHEZZA
    $array_lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $array_numeri = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $array_simboli = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];

    $array_totale = array_merge($array_lettere, $array_numeri, $array_simboli);

    $lunghezza_lettere = count($array_lettere) - 1;
    $lunghezza_numeri = count($array_numeri) - 1;
    $lunghezza_simboli = count($array_simboli) - 1;
    $lunghezza_tot = count($array_totale) - 1;

    for($i= 0; $i < $lunghezza_password; $i++) {
        $n = rand(0, $lunghezza_tot);
        $pass[] = $array_totale[$n]; 
    }
    return implode($pass);

} ?>