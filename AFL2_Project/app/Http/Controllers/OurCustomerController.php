<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCustomerController extends Controller
{
    public function index()
    {
        return view(
            'page_content.our_customer',
            [
                "pageTitle" => "Customer AUTOGLEAM",
                "first_header" => "Testimoni",
                "bold_header" => "Customer AUTOGLEAM",
                "image" => "image/about_us_illustration.png"
            ]
        );
    }
}
