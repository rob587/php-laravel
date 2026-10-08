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

// $voti = ["matematica" => 4, "italiano" => 3, "informatica" => 7, "storia" => 2, "pipo" => 1 ];

// foreach ($voti as $chiave => $valore){
//     if ($valore >= 8){
//         echo 'ottimo'. ' ';
//     }elseif ($valore >= 6){
//         echo 'sufficiente' . ' ';
//     }else {
//         echo 'insufficiente' . ' ' ;
//     }

//     echo "{$chiave}:  {$valore}\n";
// }

// $somma = 0;

// foreach($voti as $materia => $voto) {
//     $somma += $voto; 
// }

// $media = $somma / count($voti); // dividi per il numero di elementi

// echo $media;

// $media = 3.4;

// $giudizio = match(true){
//     $media >= 8 => "Promosso con lode",
//     $media >= 6 => "Promosso",
//     default     => "Rimandato"
// };

// echo $giudizio;

// function saluta($nome){
//     return "ciao {$nome}!";
// }



// Crea una funzione calcolaPrezzo(float $prezzo, int $quantita): float che ritorna il totale
// Crea una funzione applicaSconto(float $totale, int $percentuale = 10): float che applica uno sconto al totale
// Dichiara un array $prodotti con almeno 4 prodotti, ognuno con nome, prezzo e quantita
// Con un foreach itera i prodotti, chiama calcolaPrezzo per ognuno e stampa "Prodotto X: €Y"
// Calcola il totale del carrello sommando tutti i prezzi calcolati
// Applica uno sconto del 15% con applicaSconto e stampa il totale finale


// function calcolaPrezzo(float $prezzo, int $quantita): float {
//     return $prezzo * $quantita;
// }

// function applicaSconto(float $totale, int $percentuale = 10): float{
//     return $totale - ($totale * $percentuale / 100);
// }

// $prodotti = [
//     ["nome" => "Tastiera", "prezzo" => 79.99, "quantita" => 1],
//     ["nome" => "Mouse",    "prezzo" => 29.99, "quantita" => 2],
//     ["nome" => "Monitor",  "prezzo" => 299.99, "quantita" => 1],
//     ["nome" => "Cuffie",   "prezzo" => 49.99, "quantita" => 3],
// ];

// $totaleCarrello = 0;

// foreach($prodotti as $prodotto){
//     $subtotale = calcolaPrezzo($prodotto['prezzo'], $prodotto['quantita']);
//     echo "prodotto {$prodotto['nome']}: €{$subtotale}\n";
//     $totaleCarrello += $subtotale;
// }

// $totaleScontato = applicaSconto($totaleCarrello, 15);
// echo "Totale: €{$totaleCarrello}\n";
// echo "Totale con sconto 15%: €{$totaleScontato}\n";

// Crea un file studenti.php:

// Dichiara un array $studenti con almeno 5 nomi in minuscolo e disordinati, tipo ["mario", "anna", "luigi", "sara", "giorgio"]
// Usa sort() per ordinarli alfabeticamente e stampali tutti con un foreach
// Chiedi "quanti studenti ci sono?" e stampalo con count()
// Aggiungi un nuovo studente "zara" in fondo e uno "alberto" in testa, poi stampa il nuovo array
// Crea una stringa $lista unendo tutti i nomi con | come separatore usando implode
// Stampa $lista con tutti i nomi in formato ucfirst — ogni nome deve avere la prima lettera maiuscola

// $studenti = ["mario", "anna", "luigi", "sara", "giorgio"];

// array_push($studenti, "zara");
// array_unshift($studenti, "alberto");
// sort($studenti);

// foreach($studenti as $studente){
//     echo "{$studente}\n" ;
// }

// echo "Quanti studenti ci sono? " . count($studenti) . "\n";

// $lista = implode(" | ", array_map(fn($nome) => ucfirst($nome), $studenti));

// echo $lista;

// class Utente {
//     public string $nome;
//     public string $email;
//     public int $eta;

//     public function __construct(string $nome, string $email, int $eta) {
//         $this ->nome = $nome;
//         $this ->email = $email;
//         $this ->eta = $eta;
//     }

//     public function presentati(): string {
//         return "Ciao, sono {$this->nome} ({$this->email})";
//     }

//     public function getEta(): int {
//         return $this->eta;
//     }
//     }

//     $utente = new Utente("Roberto, rob@gmail.com", 24);
//     echo $utente->presentati();
//     echo $utente->getEta();

// class Animale {
//     public string $nome;

//     public function __construct(string $nome) {
//         $this->nome = $nome;
//     }

//      public function descrivi(): string {
//         return "Sono un animale e mi chiamo {$this->nome}";
//     }
// }

// class Cane extends Animale {
//     public string $razza;

//     public function __construct(string $nome, string $razza) {
//         parent::__construct($nome);
//         $this->razza = $razza;
//     }



//      public function descrivi(): string {
//         return "Sono un cane di razza {$this->razza} e mi chiamo {$this->nome}";
//     }

    
//     public function abbaia(): string {
//         return "Woof!";
//     }
// }

// $cane = new Cane("Rex", "Labrador");
// echo $cane->descrivi(); 
// echo $cane->abbaia();



// class Contatore {
//     private static int $totale = 0;

//     public static function incrementa(): void {
//         self::$totale++;
//     }

//     public static function getTotale(): int {
//         return self::$totale;
//     }
// }

// Contatore::incrementa();
// Contatore::incrementa();
// echo Contatore::getTotale();


// interface Pagabile {
//     public function calcolaTotale(): float;
//     public function applicaSconto(int $percentuale): float;
// }

// class Ordine implements Pagabile {
//     public function __construct(private float $importo) {}

//     public function calcolaTotale(): float {
//         return $this->importo;
//     }

//     public function applicaSconto(int $percentuale): float {
//         return $this->importo - ($this->importo * $percentuale / 100);
//     }
// }

// Crea una classe Prodotto con proprietà nome, prezzo (private), costruttore e un metodo getPrezzo(): float
// Crea una classe ProdottoScontato che estende Prodotto, aggiunge una proprietà sconto (percentuale intera) e fa override di getPrezzo() restituendo il prezzo già scontato
// Crea una classe Carrello con una proprietà $prodotti (array, inizialmente vuoto), un metodo aggiungi(Prodotto $prodotto): void che aggiunge un prodotto all'array, e un metodo totale(): float che somma tutti i getPrezzo() dei prodotti
// Istanzia almeno 2 Prodotto normali e 2 ProdottoScontato, aggiungili al carrello e stampa il totale

class Prodotto {
    public string $nome;
    private float $prezzo;

    public function __construct(string $nome, float $prezzo){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function getPrezzo(): float{
        return $this->prezzo;
    }
}

class ProdottoScontato extends Prodotto {
    public float $sconto;

    public function __construct(string $nome, float $prezzo, float $sconto) {
        parent::__construct($nome,$prezzo);
        $this->sconto = $sconto;
    }

       public function getPrezzo(): float {
        $prezzo = parent::getPrezzo(); 
        return $prezzo - ($prezzo * $this->sconto / 100);
    }
}

class Carrello {
    private array $prodotti = [];

    public function aggiungi(Prodotto $prodotto): void {
        $this->prodotti[] = $prodotto;
    }

    public function totale(): float {
        $totale = 0;
        foreach ($this ->prodotti as $prodotto){
            $totale += $prodotto->getPrezzo();
        }
        return $totale;
    }
}

$p1 = new Prodotto("Tastiera", 79.99);
$p2 = new Prodotto("Mouse", 29.99);
$p3 = new ProdottoScontato("Monitor", 299.99, 20); 
$p4 = new ProdottoScontato("Cuffie", 49.99, 10);

$carrello = new Carrello();
$carrello->aggiungi($p1);
$carrello->aggiungi($p2);
$carrello->aggiungi($p3);
$carrello->aggiungi($p4);

echo "Totale: €" . $carrello->totale();