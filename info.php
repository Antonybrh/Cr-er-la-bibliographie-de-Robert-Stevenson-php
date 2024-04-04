<?php 

$books = [
"L'île au trésor" => 1883,
"Enlevé" => 1886,
"Jardins des poèmes enfantin" => 1885,
];

asort($books);
foreach ($books as $key => $book) 
echo ($book .' '. '-' . '  '.$key. "</br>");

