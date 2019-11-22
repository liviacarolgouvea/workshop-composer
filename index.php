<?php

use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

if(file_exists('.env')){
    $dotenv = Dotenv\Dotenv::create(_DIR_);
    $dotenv->load();
}
print_r($_ENV);