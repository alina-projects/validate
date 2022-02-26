<?php

namespace Validate\Validate;

class Validate {
	public function validateData ($dataJson) {
		if(!is_null($dataJson)) {
		$errors = [];
		$isError = false;

		$data = json_decode($dataJson, true);

		if( 2 > strlen($data['firstname'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nume valid');
		}

		if( 2 > strlen($data['lastname'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un prenume valid');
		}

		if( 2 > strlen($data['company'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nume al companiei valid');
		}

		if( 2 > strlen($data['street1'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o adresa valida');
		}

		if( 2 > strlen($data['street2'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o adresa valida');
		}

		if( 2 > strlen($data['city'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un oras valid');
		}

		if( 2 > strlen($data['county'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un judet valid');
		}

		if( 2 > strlen($data['zip']) && is_numeric((int)$data['zip'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un zip code valid');
		}

		if( 2 > strlen($data['country'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o tara valida');
		}

		if( !preg_match("/^[0]{1}[7]{1}[0-9]{8}$/", $data['phone'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nr de telefon valid');
		}

		if( !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un email valid');
		}

		if (true == $isError) {
			var_dump($errors);
		} else {
			$name = $data['firstname'] . ' ' . $data['lastname'];
			$fullAddress = 'Street: ' . $data['street1'] . ' ' . $data['street2'] . ',city: ' . 
			$data['city'] . ',county: '. 
			 $data['county'] . ', zip-code: ' . $data['zip'] . ',country: ' . $data['country']; 

			$ui = hash('sha256', $data['phone'] . $data['email']);


			 echo '
			 	Name:'. $name .' 
			 	Company:'. $data['company'] .' 
			 	FullAddress:'. $fullAddress .' 
			 	Phone:'. $data['phone'] .' 
			 	Email:'. $data['email'] .' 
			 	UI:'. $ui ;
		}
	}
	}
}

?>