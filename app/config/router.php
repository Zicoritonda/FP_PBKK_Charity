<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    "/daftar/",
    array(
        "controller" => "daftar", //previously it was "index" 
        "action"     => "index",
    )
);

$router->handle($_SERVER['REQUEST_URI']);
