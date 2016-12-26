<?php

//// require autoloader ////

require __DIR__.'/../bootstrap/autoload.php';

//// bootstrap it ////

$app = require_once __DIR__.'/../bootstrap/app.php';

//// run app ////

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
