<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Giovanni', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Luca', 'surname' => 'Verdi', 'gender' => 'NB'],
];

foreach ($users as $user) {
    $name = $user['name'];
    $surname = $user['surname'];
    $gender = $user['gender'];

    if ($gender === 'M') {
        echo "Buongiorno Sig. $name $surname
";
    } elseif ($gender === 'F') {
        echo "Buongiorno Sig.ra $name $surname
";
    } elseif ($gender === 'NB') {
        echo "Buongiorno $name $surname
";
    } else {
        echo "Buongiorno $name $surname
"; 
    }
}

?>