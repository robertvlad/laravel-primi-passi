<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get ('/', function() {

    $welcome = 'HOMEPAGE';

    $menu = [
        'Homepage' => '/',
        'Contact Us' => '/contact_us',
        'About Us'   => '/about_us'
    ];
    
    return view ('homepage', compact('welcome', 'menu'));
})->name('homepage');


Route::get ('/contact_us', function() {

    $welcome = 'CONTACT US PAGE';

    $menu = [
        'Homepage' => '/',
        'Contact Us' => '/contact_us',
        'About Us'   => '/about_us'
    ];
    
    return view ('contact_us', compact('welcome', 'menu'));
})->name('contact_Us');


Route::get ('/about_us', function() {

    $welcome = 'ABOUT US PAGE';

    $menu = [
        'Homepage' => '/',
        'Contact Us' => '/contact_us',
        'About Us'   => '/about_us'
    ];
    
    return view ('about_us', compact('welcome', 'menu'));
})->name('about_us');
