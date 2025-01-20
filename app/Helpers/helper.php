<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('checkLogin')) {
    function checkLogin():bool
    {
        return Auth::check();
    }
}
