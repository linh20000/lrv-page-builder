<?php

use MSA\LaravelGrapes\Http\Controllers\BlockController;
use MSA\LaravelGrapes\Http\Controllers\PageController;
return [
    // routes configurations
    'builder_prefix' => '', // prefix for builder

    'middleware' => null, // middleware for builder

    'frontend_prefix' => '', // prefix for frontend

    /* Define additional translation languages. */
    'languages' => [],

    // default or extend controllers
    'controllers' => [
        'page' => PageController::class,
        'block' => BlockController::class,
    ]

];
