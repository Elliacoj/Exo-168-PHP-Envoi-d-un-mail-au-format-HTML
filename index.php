<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    '',
    ''
];

$html = "
    <html lang='fr'>
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                Bonjour à tous, voici un mail d'actualité
            </div>
        </body>
    </html>
";

foreach ($to as $item) {
    if(mail($item, "Mail", $html)) {
        echo $item . ": success <br>";
    }
    else {
        echo $item . ": error <br>";
    }
}
