<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OurCustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page_content.home', [
        "pageTitle" => "Home Page",
        "first_header" => "lorem ipsum",
        "bold_header" => "dolor sit",
        "paragraph_content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
        "link" => "www.google.com",
        "button_content" => "Check Our Product",
        "image" => "image/inova-zenix.png"
    ]);
});

Route::get('/about_us', [AboutUsController::class, 'index']);

Route::get('/our_customer', [OurCustomerController::class, 'index']);

Route::view(
    '/services',
    'page_content.services',
    ['pageTitle' => 'AUTOGLEAM Services']/*[OurCustomerController::class, 'index']*/
);

Route::view(
    '/products',
    'page_content.products',
    ['pageTitle' => 'AUTOGLEAM Products']/*[OurCustomerController::class, 'index']*/
);
