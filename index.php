<?php

$choices = [
    'Type : chaîne de caractères' => [
        1 => 'Déclaration d\'une variable de type "chaine de caractères"',
        'Affectation d\'une valeur de type "chaine de caractères" à une variable',
        'Affichage d\'une chaine de caractères',
        'Concaténation (addition d\'au moins 2 chaînes de caractères)'
    ],
    'Type : numérique' => [
        5 => 'Déclaration d\'une variable de type numérique',
        'Affectation d\'une valeur de type numérique à une variable'
    ],
    'Type : tableau' => [
        7 =>'Déclaration d\'une variable de type tableau, sans valeur',
        'Déclaration d\'une variable de type tableau, avec valeur(s)',
        'Déclaration d\'une variable de type tableau associatif, sans valeur',
        'Déclaration d\'une variable de type tableau associatif, avec valeur(s)',
        'Affectation d\'une valeur de type tableau à une variable',
        'Boucle sur un tableau',
        'Ajout d\'un élément dans un tableau',
        'Modification d\'un élément d\'un tableau',
        'Suppression d\'un élément d\'un tableau',
        'Affichage/lecture d\'un élément d\'un tableau',
        'Affichage/lecture d\'un élément d\'un tableau associatif'
    ],
    'Autre' => [
        18 => 'Commentaire',
        'Déclaration d\'une variable sans valeur',
        'Déclaration d\'une fonction',
        'Déclaration d\'une classe',
        'Affichage/lecture d\'une variable',
        'Appel/lecture d\'une fonction',
        'Instanciation d\'une classe (création d\'un objet)',
        'Boucle sur des valeurs numériques',
        'Condition',
        'Comparaison'
    ]
];

$instructions = [
    [
        'nbChoices' => 1,
        'instruction' => '// Script JavaScript sur "Back to the future"'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'var marty = "C\'est pas l\'pied!";'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'let docBrown = "Nom de Zeus!";'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'let currentYear;'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(docBrown);'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'let currentYear = 1985;'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'let visitedYears = [];'
    ],
    [
        'nbChoices' => 2,
        'instruction' => 'let sentence = \'Nous sommes actuellement en \' + currentYear;'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(sentence);'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'let characters = [\'Marty McFly\', \'Emmet Brown\', \'Biff Tannen\'];'
    ],
    [
        'nbChoices' => 3,
        'instruction' => 'console.log(\'Le premier personnage est \' + characters[0]);'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(\'Liste des personnages principaux\');'
    ],
    [
        'nbChoices' => 2,
        'instruction' => "for (let key = 0; key < characters.length; key++) {\n  console.log(characters[key]);\n}"
    ],
    [
        'nbChoices' => 1,
        'instruction' => '// On prend la DeLorean (qui a de la gueule) et on retourne 30 ans en arrière !'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'currentYear -= 30;'
    ],
    [
        'nbChoices' => 2,
        'instruction' => 'sentence = \'Nous sommes actuellement en \' + currentYear;'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(sentence);'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'visitedYears.push(currentYear);'
    ],
    [
        'nbChoices' => 1,
        'instruction' => "// Disons que la variable lightingStrikeClockTowerAt existe et contient l'heure à laquelle la foudre s'est abbatue sur l'horloge de Hill Valley"
    ],
    [
        'nbChoices' => 4,
        'instruction' => "if (lightingStrikeClockTowerAt === '22h04') {\n  console.log('La DeLorean a les 2,21 Gigowatts pour retourner en 1985 !');\n  currentYear += 30;\n} else {\n  console.log('Marty est bloqué en 1955');\n}"
    ],
    [
        'nbChoices' => 0,
        'instruction' => '// Les infos principales sur la trilogie Retour vers le futur'
    ],
    [
        'nbChoices' => 1,
        'instruction' => "let backToTheFuture = {\n  'title': 'Back To The Future',\n  'authors': 'Robert Zemeckis & Bob Gale',\n  'country': 'USA',\n  'category': 'Science-fiction',\n  'releaseDate': '1985-10-30',\n  'duration': '118min',\n  'budget': '19000000',\n  'website': 'https://www.backtothefuture.com/'\n};"
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(\'Les génies à qui on doit la trilogie sont\');'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'console.log(backToTheFuture.authors);'
    ],
    [
        'nbChoices' => 0,
        'instruction' => '// Comme on va voyager plusieurs fois dans le temps, autant tout regrouper dans ... ?'
    ],
    [
        'nbChoices' => 2,
        'instruction' => "function timeTravel(destinationYear, withRoute) {\n  if (withRoute === false) {\n    console.log('Là où on va, on n\'a pas besoin... de route.');\n  }\n  currentYear = destinationYear;\n}"
    ],
    [
        'nbChoices' => 0,
        'instruction' => 'console.log(\'Nous sommes actuellement en \' + currentYear); // => Nous sommes actuellement en 1985'
    ],
    [
        'nbChoices' => 1,
        'instruction' => 'timeTravel(2015, false);'
    ],
    [
        'nbChoices' => 0,
        'instruction' => 'console.log(\'Nous sommes actuellement en \' + currentYear); // => Nous sommes actuellement en 2015'
    ],
];

require './templates/header.tpl.php';
require './templates/home.tpl.php';
require './templates/footer.tpl.php';