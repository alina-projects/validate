# README
 Composer command: ```composer require alina-composer-package:3.0```
 
 Create a new file with name **_index.php_** and paste content : 
 

```
     <?php
		require_once './vendor/autoload.php';

		$validate = new Validate\Validate();

		$data = [];
		$data['firstname'] = 'Alina';
		$data['lastname'] = 'Popescu';
		$data['company'] = 'Programming';
		$data['street1'] = 'Str Valea lui Mihai';
		$data['street2'] = 'Nr 14 Bl 26';
		$data['city'] = 'Bucuresti';
		$data['county'] = 'Sector 3';
		$data['zip'] = '0123';
		$data['country'] = 'Romania';
		$data['phone'] = '0734455519';
		$data['email'] = 'alina@sddds.com';

		$json = json_encode($data);

		var_dump($validate->validateData($json));
	?>
```

After that you can run command in terminal ```php index.php```

Voila!
