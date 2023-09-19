<?php

use App\Compte;

include_once 'vendor/autoload.php';
$user = new User();
$compte = new Compte($user, 100);
