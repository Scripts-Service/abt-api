<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
require_once APPPATH.'\\vendor\\Faker\\autoload.php';
$faker = Faker\Factory::create();
$a = 0;
$b = array();
while ($a < 10) {
	$a++;
	array_push($b,array(
		'Image' => 'http://fakeimg.pl/800x400/',
		'Date' => $faker->date($format = 'd-m-Y H:m'),
		'Title' => $faker->sentence($nbWords = 6, $variableNbWords = true),


	));
}
echo json_encode($b);
?>
