<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function blank()
    {
        return view('pages.blank');
    }

    public function table()
    {
        return view('pages.products');
    }

    public function api()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
        ];
        return response()->json($data, 200);
    }

    public function form(){
        return view('pages.form');}
}
