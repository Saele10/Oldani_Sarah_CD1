<?php


// variables 
$notes = [15, 13, 8];


////Exercice Moyenne
function calculerMoyenne($tabl){
    $somme = 0;
    foreach ($tabl as $value){
        $somme += $value;
    }
    return $somme/3;
}


function afficherresultat($nom, $moyenne) {
    if ($moyenne >= 10 ){
        echo "$nom, à une moyenne supérieur à 10" ;
    }
    else {
        echo $nom . "à une moyenne inférieur à 10" ;  
    }   
}

print(afficherresultat("Gracie", calculerMoyenne($notes)));



// /////// Consommer une API avec guzle 
// require 'vendor/autoload.php'; // instance les class
// use GuzzleHttp\Client;

// //créer un client HTTP
// $client = new Client();

// //Faire une requete GET
// $response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon', [
//     'verify' => false // Désactiver la vérification SSL
// ]);


// $statusCode = $response->getStatusCode();
// $body = $response->getBody();
// $data = json_decode($body, true);

// //Afficher les données
// // echo "\n" . $data['sprites']['front_default'];
// for ($i = 0; $i < 20; $i++){
//     echo "\n" . "\n" . "Pokemon : " . $data['results'][$i]['name'] . "\n"  . "\n";
// }
// // echo "\n" . "Pokemon : " . $data['name'] . "\n";

?>