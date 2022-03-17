<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/classes/Food.php';




// User section

$user1 = new User(true, "valid", "Timmy Red");
$user2 = new User(false, "valid", "Unknown");
$user3 = new User(true, "expired", "Jack Yellow");

// Food section

$cat_food = new Food("Cibo per gatti", 4.5/*, "In scatola", "Medium"*/);
$dog_food = new Food("Cibo per cani", 13/*, "In scatola", "Large"*/);
$turtle_food = new Food("Mangime per tartarughe", 5/*, "In barattolo", "Small"*/);
$rabbit_food = new Food("Cibo per conigli", 6/*, "In scatola", "Medium"*/);

// Toys section

$cat_toy = new Toys("Gomitolo di lana", 5.70/*, "Blu"*/);
$dog_toy = new Toys("Osso di gomma", 9/*, "Standard"*/);
$hamster_toy = new Toys("Ruota per criceti", 11.90/*, "Standard"*/);


// Echoed

echo $user1->purchaseResult() . '<br>';
echo $user2->purchaseResult() . '<br>';
echo $user3->purchaseResult() . '<br>';



?>