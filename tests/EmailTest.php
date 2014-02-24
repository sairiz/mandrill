<?php

class EmailTest extends TestCase {

	public function testMandrillIInstance()
	{
		$this->assertInstanceOf('Sairiz\Mandrill\Mandrill', App::make('mandrill') );
	}

	public function testMandrillConnectionViaFacadesEmail()
	{
	    $message = array(
	        'subject' => 'Test Connection',
	        'html' => '<html><body>Test body</body></html>',
	        'text' => 'Test text',
	        'from_email' => 'test@email.com',
	        'to' => array(array('email'=>'reject@test.mandrillapp.com'))
		);

		$response = Email::messages()->send($message);

	  	$this->assertArrayHasKey('status', $response[0]);
	}
}