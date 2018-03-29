<?php

$route->add('GET', '/', 'Pages@index');
$route->add('GET', '/pages/about', 'Pages@getAbout');

// Dash
$route->add('GET', '/dash', 'Dash@index', true, ['admin', 'teacher', 'student']);

// Users
$route->add('GET', '/users', 'Users@getUsers', true, ['admin']);
$route->add('GET', '/users/edit', 'Users@getUser', true, ['admin']);
$route->add('POST', '/users/update', 'Users@putUser', true, ['admin']);
$route->add('POST', '/users/create', 'Users@postUser', true, ['admin']);
$route->add('GET', '/users/delete', 'Users@deleteUser', true, ['admin']);

// User Public
$route->add('GET', '/users/login', 'Users@login');
$route->add('GET', '/users/logout', 'Users@logout', true, ['admin', 'teacher', 'student']);

// Courses
$route->add('GET', '/courses', 'Courses@index', true, ['admin', 'teacher', 'student']);


// Set 404 Page.
// Make sure to have this as your last call
$route->set404('Pages@get404');
