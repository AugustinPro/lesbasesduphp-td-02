<?php
// 1. chaine guillemets simples (stringSingleQuotes)
$string1 = '« Bonjour, je m\'appelle françois dupont, j\'ai 35 ans et j\'habite paris. »';

// 2.  chaine guillemets doubles (stringDoubleQuotes)

$string2 = "« je suis une \"chaîne de caractères\". »";

// 3. chaine longue, écriture HereDoc (longString)

$string3 = <<<EOD
«Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre. Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais dans un extrême embarras. Voir, si touchés que je fusse un grand misérable! Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en allait.»
EOD;

// 4. nouvelle chaine guillemets simple corrigée (firstname, lastname, age, city)
$lastname = 'dupont';
$name = 'françois';
$city = 'paris';
$string4 = '« Bonjour, je m\'appelle ' .$name. '&nbsp;' .$lastname. ', j\'ai 35 ans et j\'habite ' .$city. ' »';

// with double quotes : 
$string4 = "« Bonjour, je m'appelle $name $lastname, j'ai 35 ans et j'habite $city »";

// 5. Nouvelle chaîne formée avec des variables (newStringSingleQuotes)

$lastname = strtoupper($lastname);      //string to upper (makes whole string caps)
$name = ucfirst($name);                 //first letter of string uppercase
$city = ucwords($city);                 //first letter of each word in string uppercase

$string5 = '« Bonjour, je m\'appelle ' .$name. ' ' .$lastname. ', j\'ai 35 ans et j\'habite ' .$city. ' »';

// 6. Nouvelle chaine modifiée (revisedNewStringSimpleQuotes)

$string6 = ucwords($string1);

// Tableaux

// 8. Notes (grades)

$notes = [15, 13, 8, 10, 17];

// 9. Matières (courses)

$matieres = ['html/css', 'algorithmique', 'anglais', 'marketing', 'ui/ux'];

// 11. fusion de deux tableaux (coursesGrades)

$string7 = array_combine($matieres, $notes);

// copie du tableau pour ne écraser l'original (revisedCoursesGrades)

//$string7['algorithmique'] = 10;       //does the same thing but easier
//$string7[3] = 13;                     //works too
$replace = ['algorithmique' => 10, 'marketing' => 13];
$string8 = array_replace($string7, $replace);

//Look around https://www.php.net/manual/en/ref.array.php for a bunch of array functions built-in to php

// 12. Inversion des notes d'algorithmique et de marketing

// 13. Tableau de notes des étudiants (students)

$string9 = [
    'eleve1' => [                   //sub array
        'html/css' => 12,
        'algorithmique' => 9,
        'anglais' => 18,
        'marketing' => 15,
        'ui/ux' => 13
    ],
    'eleve2' => [
        'html/css' => 16,
        'algorithmique' => 7,
        'anglais' => 13,
        'marketing' => 14,
        'ui/ux' => 14
    ],
    'eleve3' => [
        'html/css' => 12,
        'algorithmique' => 16,
        'anglais' => 15,
        'marketing' => 12,
        'ui/ux' => 18
    ],
    'eleve4' => [
        'html/css' => 19,
        'algorithmique' => 17,
        'anglais' => 12,
        'marketing' => 11,
        'ui/ux' => 18
    ],
];

//to target eleve2 -> marketing : $string9['eleve2']['marketing'];
//                                $string9[1][3];   works the same

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Chaines de caractères | Tableaux</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Training sur les chaines de caractères et les tableaux</h1>

        <div class="container">
            <div class="card-columns">
            <!-- Question 1 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 1</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                            <?= $string1 ?>
                        </p>
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="card p-3">
                    <h2 class="card-title">Chaine guillemets doubles</h2>
                    <p>
                         <!-- afficher votre réponse ici -->
                         <?= $string2 ?>
                    </p>
                </div>
                <!-- Question 3 -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Chaine Très longue</h2>
                        <blockquote class="blockquote mb-0">
                            <p class="card-text">
                                 <!-- afficher votre réponse ici -->
                                 <?= $string3 ?>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 2</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                            <?= $string4 ?>
                        </p>
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="card">
                    <div class="card-body bg-primary text-white">
                        <h2 class="card-title">Présentation 3</h2>
                        <p class="card-text">
                             <!-- afficher votre réponse ici -->
                             <?= $string5 ?>
                        </p>
                    </div>
                </div>
               
               <!-- Question 6 -->
                <div class="card bg-primary text-white text-center p-3">
                    <h2 class="card-title">Longueur d'une chaine</h2>
                    <p>Le prénom contient <?php echo strlen($name); ?> caractères.</p>
                </div>

                 <!-- Question 7 -->
                 <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h2 class="card-title">Présentation 4</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                            <?= $string6 ?>
                        </p>
                    </div>
                </div>

                <!-- Question 10 -->
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes / Matières</h2>
                        <p class="card-text">
                            <!-- afficher votre réponse ici -->
                            Matière : <?= $matieres[4] ?> | Note : <?= $notes[4] ?>
                        </p>
                    </div>
                </div>
                <!-- Question 11 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Fusion Matières / Notes</h2>
                        <p class="card-text">
                            <pre>
                                <!-- afficher votre réponse ici -->
                                <?php print_r($string7); ?>
                            </pre>
                        </p>
                    </div>
                </div>

                <!-- Question 12 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Correction reporting</h2>
                        <p class="card-text">
                            <!-- question 11 -->
                            <pre>
                                 <!-- afficher votre réponse ici -->
                                 <?php var_dump($string8) ?>
                            </pre>
                        </p>
                    </div>
                </div>
                <!-- Question 13 -->
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Tableau - Notes étudiants</h2>
                        <p class="card-text">
                            <pre>
                                 <!-- afficher votre réponse ici -->
                                 <?php print_r($string9) ?>
                            </pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>