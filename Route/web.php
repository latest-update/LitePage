<?php

use Core\Database\Query;
use Core\Route\Route;
use Core\Workflow\Controller;


Route::get('/', function () {
    return '<h1>Hello Page</h1>';
});

Route::get('/users', function () {
    return print_pre( Query::select('SELECT * FROM `users`') );
});

Route::get('/employees', function () {
    return print_pre( Query::select('SELECT * FROM `employees`') );
});

Route::get('/new', function () {
    return print_pre( Query::insert("
        INSERT INTO employees (ChiefId, Department, Name, Salary) 
        VALUES (11, 'Engineering', 'Rakhat', 1100)
    "));
});

Route::get('/page', function () {
    return Controller::handle(['\PageController', 'show']);
});

Route::get('/xmlToJson', function () {
    return Controller::handle(['\ConverterController', 'toXml']);
});

Route::get('/jsonToXml', function () {
    return Controller::handle(['\ConverterController', 'toJson']);
});

Route::get('/circulation', function () {
    return Controller::handle(['\ConverterController', 'circulation']);
});