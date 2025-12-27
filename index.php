<?php 

$heading = 'Home';

function dumbDie($value) {
echo  "<pre>";
var_dump($value);
echo "</pre>";

die(); 

}

echo ($_SERVER['REQUEST_URI'] === '/laracast-websites/demo/index.php') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white'; ?>



require "views/index.view.php";