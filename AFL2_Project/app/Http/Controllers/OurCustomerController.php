<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Testimony;
use Illuminate\Http\Request;

class OurCustomerController extends Controller
{
    public function index()
    {
        return view(
            'page_content.our_customer',
            [
                "pageTitle" => "Customer AUTOGLEAM",
                "image" => "image/about_us_illustration.png",
                "testimony" => Testimony::all()
            ]
        );
    }
}
