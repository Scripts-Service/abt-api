<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($ab = null)
	{
		require_once APPPATH.'\\vendor\\Faker\\autoload.php';
		$faker = Faker\Factory::create();
		if($ab != null){
			$a = 0;
			$b = array();
			while ($a < $ab) {
				$a++;
				array_push($b,array(
					'Image' => 'http://fakeimg.pl/800x400/',
					'Date' => $faker->date($format = 'd-m-Y H:m'),
					'Title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
				));
			}
			echo json_encode($b);
		}else{
			$b = array();
			array_push($b,array(
				'Image' => 'http://fakeimg.pl/800x400/',
				'Date' => $faker->date($format = 'd-m-Y H:m'),
				'Title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
			));
			echo json_encode($b);
		}
	}
}
