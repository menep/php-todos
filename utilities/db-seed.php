<?php
require 'vendor/autoload.php';

use App\Models\Todo;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

for ($i = 0; $i < 10; $i++) {
    $faker = Faker\Factory::create();
    $body = $faker->text(20);
    $priority = $faker->numberBetween(1, 3);
    $due = date_format($faker->dateTimeBetween('now', "+30 days"), 'Y-m-d');
    
    Todo::save(['body' => $body, 'priority' => $priority, 'due' => $due]);
}
