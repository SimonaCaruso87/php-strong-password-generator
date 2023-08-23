Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

<!-- // Milestone 1
// Creare un form che invii in GET la lunghezza della password. 
// Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, 
// lettere maiuscole, numeri e simboli) da restituire all'utente.

//password combinata
// $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
// $shfl = str_shuffle($comb);
// $pwd = substr($shfl,0,8);
// echo $pwd;

// password numeri
// $combNumb = '0123456789';
// $pass = array(); 
// $combLen = strlen($combNumb) - 1; 
//  for ($i = 0; $i < 8; $i++) {
//      $n = rand(0, $combLen);
//      $pass[] = $combNumb[$n];
//  }
//  echo(implode($pass)); 

// $simboli["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
// $simboli["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// $simboli["numeri"] = '1234567890';
// $simboli["caratteri_speciali"] = '!?~@#-_+<>[]{}';

$letters = "abcdefghijklmnopqrstuvwxyz";
$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "1234567890";
$characthers_special = "!?~@#-_+<>[]{}";
$shfl = str_shuffle($letters . $numbers . $characthers_special . $uppercase);
$pwd = substr($shfl,0,12);
echo $pwd . " ";

$lunghezza = strlen($pwd);

// $_POST($lunghezza);

$lunghezzaPost = $_POST('nome');


// $pwd = $_POST['pwd'];
// $lunghezza = strlen($pwd);


// $paragrafo = $_POST['paragrafo'];
// $lunghezza = strlen($paragrafo);
// $_POST($paragrafo); -->
