<?php
require __DIR__ .'/vendor/autoload.php';
$faker = Faker\Factory::create();
$faker->addProvider(new SchoolNameGenerator\FakerProvider($faker));
$i = 0;

echo "UNIVERSITIES\n";
for ($i = 0; $i < 10; $i++) {
    $university = $faker->universityName;
    echo "{$university}\n";
}

echo "\nSCHOOLS\n";
for ($i = 0; $i < 10; $i++) {
    $school = $faker->schoolName;
    echo "{$school}\n";
}

echo "\n";