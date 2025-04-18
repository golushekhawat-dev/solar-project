<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('isActiveRoute')) {
    function isActiveRoute($routeName, $activeClass = 'active text-success')
    {
        return Route::currentRouteName() === $routeName ? $activeClass : '';
    }
}