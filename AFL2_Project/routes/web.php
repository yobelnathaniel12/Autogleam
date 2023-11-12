<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OurCustomerController;
use App\Http\Controllers\ProductController;

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
        "first_header" => "Tampilan Kilau,",
        "bold_header" => "Wujudkan Impian",
        "paragraph_content" => "Dengan fokus pada kualitas dan inovasi, AUTOGLEAM memahami kebutuhan akan perlengkapan mobil terbaik yang tidak hanya membuat mobil Anda bersih, tetapi juga menghadirkan kilau yang memukau.",
        "link" => "/products",
        "button_content" => "Cek Produk Kami",
        "image" => "image/inova-zenix.png"
    ]);
});

Route::get('/about_us', [AboutUsController::class, 'index']);

Route::get('/our_customer', [OurCustomerController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::view(
    '/services',
    'page_content.services',
    ['pageTitle' => 'AUTOGLEAM Services']/*[OurCustomerController::class, 'index']*/
);

// Route::view(
//     '/products',
//     'page_content.products',
//     ['pageTitle' => 'AUTOGLEAM Products']/*[OurCustomerController::class, 'index']*/
// );
