<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'page_content.about_us',
            [
                "pageTitle" => "About AUTOGLEAM",
                "first_header" => "Tentang",
                "bold_header" => "AUTOGLEAM",
                "paragraph_content" => "Autogleam adalah bisnis start-up yang bergerak dalam bidang otomotif lebih tepatnya autocare. Kami menjual produk yang dimana kompetitor masih belum menjualnya, produk unggulan kami adalah shampoo wax & hydrophobic.",
                "link" => "www.google.com",
                "button_content" => "Jelajahi AUTOGLEAM",
                "image" => "image/about_us_illustration.png"
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
