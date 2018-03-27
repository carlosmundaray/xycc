<?php

$route->add('/', 'Pages@index');
$route->add('/pages/about', 'Pages@about');

// Dash
$route->add('/dash', 'Dash@index');

// Users
$route->add('/users', 'Users@index', ['admin']);
$route->add('/users/edit', 'Users@edit', ['admin']);
$route->add('/users/create', 'Users@create', ['admin']);
$route->add('/users/login', 'Users@login', ['admin']);

// Courses
$route->add('/courses', 'Courses@index', ['admin', 'teacher', 'student']);


 ?>
