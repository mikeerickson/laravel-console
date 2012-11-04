<?php

/*
|--------------------------------------------------------------------------
| Set console config
|--------------------------------------------------------------------------
*/

Config::set('application.profiler', false);
Config::set('error.detail', true);
Config::set('error.log', false);

/*
|--------------------------------------------------------------------------
| Load console helpers
|--------------------------------------------------------------------------
*/

require __DIR__.DS.'helpers.php';
