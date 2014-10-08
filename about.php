
<?php

require_once("vars.php");


site_start("About me!");
back();


$object_adder = new Management();
echo "<h3>About me!</h3>";
echo "<pre> <p> <strong>";

$object_adder->add_info("Name","Aadit Kapoor");
$object_adder->add_info("Age", 14);
$object_adder->add_info("Projects","<a href = 'projects.php'>See projects.php</a>");
$object_adder->add_info("Github","<a href = 'www.github.com'>Github Page</a>");
$object_adder->add_info("Interests","Computer Science, Electronics");
$object_adder->add_info("Other that computer science","Writing, Thinking, Playing, Cooking");
$object_adder->add_info("Inspired by","Steve Jobs, Bill Gates, Mahtma Gandhi, Abraham Liconln, Mark Zuckerberg, Albert Einstein");
$object_adder->add_info("Email",'akapoorx00@gmail.com');
$object_adder->add_info("Webiste","Created with PHP!");


$object_adder->show_data();
copyright();
site_close();




?>





