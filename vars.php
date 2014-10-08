<?php

define('SEARCH_PHP', "search.php",true);
define ('ABOUT_PHP',"about.php",true);
define ('CONTACT_PHP',"contact.php",true);
define ('PROJECTS_PHP',"projects.php",true);
define ('DY_TH_PHP',"dy-th.php",true);
define ('ERROR_PHP',"rerror.php",true);


$rerror = "For any error, please pull and issue on github.com<br>";


$year = 2000;

//$date = date('y') + $year;
$date = 2014;
$my_age = $date - $year;

function back() {
	echo "<a href = 'index.php'>Home</a>";
}


function site_start($m) {
	echo "<html><head><title>$m</title></head><body>";
}
function site_close() {

	echo "</body></html>";
}


function show_data($data) {

	echo "<div align = 'center'>";
	foreach ($data as $key => $value) {
		echo "<b> $key: <i>$data[$key]</i> </b>";
		echo "<p>";
	}
	echo "</div>";
	echo "</p>";
}


function copyright() {
	echo "<hr>";
		global $rerror;
		echo "<b>".$rerror."</b>";
		echo "<b>PSST!	 I am not a Web Designer! </b>". "<br>";
		echo "<b>(c) Aadit Kapoor 2014</b>";
}

// Simple class for information manage

class Management {
	public $data = array();





	public function __contruct() {
		if ($this->data == false) {
			echo "<pre> Your Information is empty! </pre>";
		}
	}

	public function add_info($key,$value) {
		$this->data[$key] = $value;
	}

	public function show_data() {
		show_data($this->data);
		
	}

	public function show_count() {
		echo count($this->data);
	}


}



?>














