<?php

require_once("vars.php");
back();	
site_start('My Projects');

$object_adder = new Management();

$object_adder->add_info("Projects", "Termx, updateme, FindIt");
echo "<br>";
$object_adder->add_info("Termx","A simple command line application that acts like a shell. (C Programming)");
$object_adder->add_info("Updateme","A Blogging web app, that acts like a livejournal. (Python/ Django)");
$object_adder->add_info("FindIt","A program that searches for a word or a letter in a given file. (Python");
$object_adder->add_info("Projects",'More to come....');
echo "<br>";

$object_adder->add_info("Github","www.github.com/akapoorx00");


$object_adder->show_data();

copyright();

?>