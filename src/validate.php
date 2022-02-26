<?php

namespace Validate;

class Validate {
	public function validateData ($dataJson) {
		if(!is_null($dataJson)) {
		$errors = [];
		$isError = false;

		if( 2 > strlen($dataJson['firstname'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nume valid');
		}

		if( 2 > strlen($dataJson['lastname'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un prenume valid');
		}

		if( 2 > strlen($dataJson['company'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nume al companiei valid');
		}

		if( 2 > strlen($dataJson['street1'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o adresa valida');
		}

		if( 2 > strlen($dataJson['street2'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o adresa valida');
		}

		if( 2 > strlen($dataJson['city'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un oras valid');
		}

		if( 2 > strlen($dataJson['county'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un judet valid');
		}

		if( 2 > strlen($dataJson['zip']) && is_numeric((int)$dataJson['zip'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un zip code valid');
		}

		if( 2 > strlen($dataJson['country'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti o tara valida');
		}

		if( !preg_match("/^[0]{1}[7]{1}[0-9]{8}$/", $dataJson['phone'])) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un nr de telefon valid');
		}

		if( !filter_var($dataJson['email'], FILTER_VALIDATE_EMAIL)) {
			$isError = true;
			array_push($errors,'Va rugam sa introduceti un email valid');
		}

		if (true == $isError) {
			var_dump($errors);
		} else {
			$name = $dataJson['firstname'] . ' ' . $dataJson['lastname'];
			$fullAddress = 'Street: ' . $dataJson['street1'] . ' ' . $dataJson['street2'] . ',city: ' . 
			$dataJson['city'] . ',county: '. 
			 $dataJson['county'] . ', zip-code: ' . $dataJson['zip'] . ',country: ' . $dataJson['country']; 

			$ui = hash('sha256', $dataJson['phone'] . $dataJson['email']);


			 echo '
			 	<p>Name:'. $name .' </p>
			 	<p>Company:'. $dataJson['company'] .' </p>
			 	<p>FullAddress:'. $fullAddress .' </p>
			 	<p>Phone:'. $dataJson['phone'] .' </p>
			 	<p>Email:'. $dataJson['email'] .' </p>
			 	<p>UI:'. $ui .' </p>
			 ';
		}
	}
	}
}

?>