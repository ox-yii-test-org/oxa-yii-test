oxa-yii-test
============

oxa-yii-test readme


To start project you require to create file with local configuration: 
*./protected/config/local_config.php*

Source example:

```php
<?php

return array(
	// application components
	'components'=>array(

		'db'=>array(
			'connectionString' => 'mysql:host=dev4.oxagile.com;dbname=some_database_name',
			'emulatePrepare' => true,
			'username' => '****',
			'password' => '********',
			'charset' => 'utf8',
		),
	),

	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'rastorguev@oxagile.com',
	),
);
```
