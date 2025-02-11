<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //ORM -> Eloquent
    User::create([
        'name' => 'Lucas',
        'email' => 'lucas@gmail.com',
        'password' => bcrypt('password')
    ]);
});
