<?php

function validate($roll, $pass) {

	$url = 'https://webkiosk.thapar.edu/CommonFiles/UserAction.jsp';
	$data = array('txtuType' => 'Member Type', 'UserType' => 'S', 'txtCode'=>'Enrollment No', 'MemberCode' =>  $roll, 'txtPin' => 'Password/Pin', 'Password' => $pass, 'BTNSubmit' => 'Submit');

	// use key 'http' even if you send the request to https://...
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	if ($result === FALSE) { echo "Error"; }

	return strlen($result);
}

?>