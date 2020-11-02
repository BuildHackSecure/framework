<?php
Route::add(array('GET', 'POST'), '/', 'ExampleController@home');
Route::add(array('GET', 'POST'), '/api', 'ExampleController@api');
//the below shows an example of a coupe pattern matching in the Routing
//see the makeRegex function in Route.php for more examples and how to create your own
//the below routes requests from the root ending in an int for example /1 or /323232
Route::add(array('GET', 'POST'), '/[int]', 'ExampleController@doInt');
//the below routes requests from the root ending in a selection of strings
Route::add(array('GET', 'POST'), '/(adam|john|sally)', 'ExampleController@doExactString');
//the below routes requests from the root ending in a string ( a-z A-Z & 0-9 ) for example /hello
Route::add(array('GET', 'POST'), '/[string]', 'ExampleController@doString');