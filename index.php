<?php 

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/laracast-websites/demo/about') {
    require 'controllers/about.php';
} 

