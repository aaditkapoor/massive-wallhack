<?php

// A automatic delivery system

$replies = array(
	'Hello' => array("How are you?", "I am fine!", "Howdy!", "Hello there!"),
	'There is an Error' => array("Thank you for your support!", "We will look into the matter","I am sorry!"),
	'How to contact you?' => array("Email me!", "Send a me request!", "Follow me on twitter!"),
	);

/*
* SERIES:
CASE 1: 
get_reply() -> pass
get_reply2() -> pass

CASE2:
get_reply() -> pass
get_reply2() -> pass

Case3:
get_reply() -> failed
get_reply2 -> pass

*/


function check_key($key,$data) {
	if (is_array($data)) {
	if (array_key_exists($key, $data)) {
		return 'found!';
	}
	else {
		return 'not found!';
	}
}
else {
	echo "Provide an array!";
}

}




function get_reply($key,$data) {
	$message = null;
	$random = rand(0,count($data));

	if (check_key($key,$data) == 'found!') {
		$message = $data[$key][$random];
	}
	else {
		$message = "Thanks!";
	}
}










?>
