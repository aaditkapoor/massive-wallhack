<?php

require_once ("vars.php");
back();


$object_adder = new Management();

$search_query = htmlspecialchars($_GET['search_q']);


function search($data,$item) {
	$buffer = false;

	foreach ($data as $key => $value) {

		if ($item == $key) {
			echo "<b> $data[$key] </b>";
			$buffer = true;
			break;
		}
		else if ($item == $data[$key]) {
			echo "<b>$item</b>";
			$buffer = true;
			break;
		}
		else {
			echo "Search failed!";
			return $buffer;
		}

	}
}


if (empty($search_query)) {
	echo "<b>Input cannot be empty! </b>";
	header("Location: index.php");
}

else {

	 if (search($object_adder->data,$search_query) == false) {
	 	echo "Search was failed!";
	 }
}




?>