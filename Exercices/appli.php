<?php
/////// Consommer une API avec guzle 
require 'vendor/autoload.php'; // instance les class
use GuzzleHttp\Client;

//créer un client HTTP
$client = new Client();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Search</title>
</head>

<body>

    <!-- Afficher un formulaire pour demander le nom d'un Pokémon -->
    <form method="POST" action="">
        <label for="pokemon_name">Entrez le nom anglais d'un Pokémon :</label>
        <input type="text" id="pokemon_name" name="pokemon_name" required>
        <button type="submit">Rechercher</button>
        <br><br>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pokemonName = htmlspecialchars($_POST['pokemon_name']);
        echo "Vous avez recherché : " . $pokemonName;
        $apiLink = 'https://pokeapi.co/api/v2/pokemon/' . $pokemonName;
        //Faire une requete GET
        try {
            $response = $client->request('GET', $apiLink, [
                'verify' => false // Désactiver la vérification SSL
            ]);
            // Vérifier le code de statut de la réponse
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody();
                $data = json_decode($body, true);
    ?>

                <br><br>
                <h2>Données du Pokémon :</h2>

    <?php
                // création du tableau 
                echo '<table border="1">';
                echo '<tr><th>Nom</th><td>' . $data['name'] . '</td></tr>'; // récupérer le nom du pokémon
                echo '<tr><th>Poids</th><td>' . $data['weight'] . '</td></tr>'; // récupérer le poids du pokémon
                echo '<tr><th>Taille</th><td>' . $data['height'] . '</td></tr>';   // récupérer la taille du pokémon
                // récuperer le ou les types du pokémon 
                foreach ($data['types'] as $type) {
                    echo '<tr><th>Type</th><td>' . $type['type']['name'] . '</td></tr>';
                }
                echo '</table>';
            } else {
                // Si la requête échoue, afficher un message d'erreur
                echo "Le nom de ce Pokémon n'est pas valide et/ou n'existe pas !";
            }
        } catch (Exception $e) {
            // Gérer les exceptions ici
            echo 'Erreur : ' . $e->getMessage();
        }
    }
    ?>

    <br><br>

</body>

</html>