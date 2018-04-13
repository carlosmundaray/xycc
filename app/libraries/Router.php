<?php

$route->add('GET', '/', 'Pages@index');
$route->add('GET', '/pages/about', 'Pages@getAbout');
$route->add('GET', '/pages/admissions', 'Pages@getAdmissions');
$route->add('GET', '/pages/academics', 'Pages@getAcademics');
$route->add('GET', '/pages/campus', 'Pages@getCampus');
$route->add('GET', '/pages/store', 'Pages@getStore');

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
$route->add('POST', '/users/auth', 'Users@auth');
$route->add('GET', '/users/logout', 'Users@logout', true, ['admin', 'teacher', 'student']);

// Classes
$route->add('GET', '/classes/view/', 'Classes@getClass', true, ['admin', 'teacher', 'student']);
$route->add('POST', '/classes/edit', 'Classes@putClass', true, ['admin', 'teacher', 'student']);
$route->add('POST', '/classes/create', 'Classes@postClass', true, ['admin', 'teacher', 'student']);

// Courses
$route->add('GET', '/courses', 'Courses@index', true, ['admin']);
$route->add('GET', '/courses/edit', 'Courses@getCourse', true, ['admin']);
$route->add('POST', '/courses/update', 'Courses@putCourse', true, ['admin']);
$route->add('POST', '/courses/create', 'Courses@postCourse', true, ['admin']);


// Set 404 Page.
// Make sure to have this as your last call
$route->set404('Pages@get404');
