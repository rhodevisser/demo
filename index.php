<?php 

$heading = 'Home';

function dumbDie($value) {
echo  "<pre>";
var_dump($value);
echo "</pre>";

die(); 

}

if ($_SERVER['REQUEST_URI'] === '/laracast-websites/demo/index.php' ) { 
    echo 'bg-black 900 text-white'; 
} else {
    echo 'text-gray-300';
}

echo $_SERVER['REQUEST_URI'] === '/laracast-websites/demo/index.php' ? 'bg-black 900 text-white' : 'text-gray-300'; 



require "views/index.view.php";