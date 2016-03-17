<?php

namespace App\Http\Controllers;

class PagesController extends Controller{


	public function getIndex(){

			return view ('pages.welcome');

	}



	public function getAbout(){

				$first = 'sanjeev';
				$last = 'singh';

				$full = $first." ".$last;

				$email = 'sanjeevsinghse@gmail.com';

				$data = [];

				$data['email'] = $email;

				$data['full'] = $full;

				return view ('pages.about')->withData($data);

	}


	public function getContact(){


			return view ('pages.contact');

	}





}