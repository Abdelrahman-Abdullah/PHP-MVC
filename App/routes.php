<?php
$router->get("","ArticleController@index");
$router->get("articles/create","ArticleController@create");
$router->get("article","ArticleController@show");
$router->post("articles/store","ArticleController@store");
$router->get("article/edit","ArticleController@edit");
$router->post("article/update","ArticleController@update");
$router->get("article/delete","ArticleController@delete");
