# School Name Generator

Generate plausible-sounding English-language school and university names.

## Installation

Add the SchoolNameGenerator library to your `composer.json` file:
```
{
  "require": {
    "chrishepner/school-name-generator": "dev-master"
  }
}
```

## Usage

Use the `SchoolNameGenerator\FakerProvider` class in
combination with [Faker](https://github.com/fzaninotto/Faker)
to produce school or university names:

```php
$faker = Faker\Factory::create();
$faker->addProvider(new SchoolNameGenerator\FakerProvider($faker));
for ($i = 0; $i < 10; $i++) {
    echo $faker->schoolName . '\n';
}
```

Some sample output:
```
universityName
==========
University of Alabama
Cole University
Rossieshire Institute of Technology
College of Louisiana
University of Hawaii
O'Kon College
Little Institute of Technology
Utah University
Kshlerin College
Connelly University

schoolName
==========
Kassulke High
Koepp Secondary School
South Cooper School for Boys
Russelborough School for Girls
North Lianaton School for Boys
Reganville School for Girls
Port Karen Elementary
Emmerich High School
South Burdette Elementary
West Lukaston School of Fine Arts
```
