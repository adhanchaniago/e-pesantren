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

/**
 * Route Auth
 * 
 * @author Taylor Otwel <laravel>
 */
Auth::routes();

/**
 * Route Admin
 * 
 * @author Rezky Maulana <rezkyforce@gmail.com>
 */
include 'role/admin.php';

/**
 * Route Client
 * 
 * @author Rezky Maulana <rezkyforce@gmail.com>
 */
include 'role/client.php';

