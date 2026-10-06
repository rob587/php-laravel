 <?php

// $nome = "roberto";
// $cognome = "cammarata";
// $anni = 1;
// $stack = 'react';
// $avaiable = true;

// echo "Mi chiamo {$nome} {$cognome}, ho {$anni} anno di esperienza";

// var_dump( $anni, $avaiable, $cognome);

// $nomeCompleto = $nome . " " . $cognome;

// echo $nomeCompleto; -->

// //--------------

// $year = 20;

// if ($year >= 18) {
//     echo 'Vecchiazzo';
// }elseif ($year < 18) {
//     echo 'Giovine';
// }else {
//     echo 'picciriddu';
// }

// $role = 'admin';

// $label = ($role === 'admin') ? 'Amministratore' : 'utente';

// echo $label;

// $username = null;
// echo $username ?? "Ospite";



// for ($i = 0; $i < 5; $i++){
//     echo $i . "\n";
// }

// $tries = 0;

// while ($tries < 4) {
//     echo 'tries' . ($tries + 1) . "\n";
//     $tries++;
// }

// $skills = ["React", "Node", "PHP"];

// foreach ($skills as $skill) {
//     echo $skill . "\n";
// }

// $persona = ["nome" => "Roberto", "eta" => 23];

// foreach ($persona as $chiave => $valore) {
//     echo "{$chiave}: {$valore}\n";
// }


// $ruolo = "editor";

// $messaggio = match($ruolo) {
//     "admin"  => "Accesso totale",
//     "editor" => "Può modificare contenuti",
//     "user"   => "Sola lettura",
//     default  => "Ruolo non riconosciuto"
// };

// echo $messaggio;

// Crea un file voto.php che simula una pagella scolastica:

// Dichiara un array $voti con almeno 5 materie e i relativi voti (numeri da 1 a 10), tipo ["Matematica" => 8, "Storia" => 6, ...]
// Con un foreach itera l'array e per ogni materia stampa la materia e il voto
// Dentro il foreach, usa if / elseif / else per stampare anche un giudizio: >= 8 = "Ottimo", >= 6 = "Sufficiente", sotto 6 = "Insufficiente"
// Dopo il foreach, calcola la media dei voti con un secondo loop e stampala
// Usa match per stampare un giudizio finale sulla media: >= 8 = "Promosso con lode", >= 6 = "Promosso", sotto = "Rimandato"

$voti = ["matematica" => 4, "italiano" => 3, "informatica" => 7, "storia" => 2, "pipo" => 1 ];

foreach ($voti as $chiave => $valore){
    if ($valore >= 8){
        echo 'ottimo'. ' ';
    }elseif ($valore >= 6){
        echo 'sufficiente' . ' ';
    }else {
        echo 'insufficiente' . ' ' ;
    }

    echo "{$chiave}:  {$valore}\n";
}

$somma = 0;

foreach($voti as $materia => $voto) {
    $somma += $voto; 
}

$media = $somma / count($voti); // dividi per il numero di elementi

echo $media;

$media = 3.4;

$giudizio = match(true){
    $media >= 8 => "Promosso con lode",
    $media >= 6 => "Promosso",
    default     => "Rimandato"
};

echo $giudizio;