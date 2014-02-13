Mandrill Official API Wrapper for Laravel 4
===========================================


Installation :
==============

1. Install the [package](https://github.com/SaiffilFariz/Mandrill) via composer

2. Add the following entry to the array of service providers found in app/config/app.php :
`'Saiffil\Mandrill\MandrillServiceProvider',`

3. Publish the config file to your app/config/ directory by running the following from command line in your project root :
`php artisan config:publish saiffil/mandrill`

4. Setup your api key at app/config/packages/saiffil/mandrill/config.php


Usage
=====

Call any method using Facade alias (Email)

Example :

    $message = array(
        'subject' => 'Your subject here',
        'html' => '<html><body>Your email body</body></html>',
        'from_email' => 'yours@email.com',
        'to' => array(array('email'=>'clients@email.com'))
	);

	$response = Email::message()->send($message);

	The first method is the call category while the chain method is the method within that category

Refer to the official documentation for full method at
https://mandrillapp.com/api/docs/index.php.html