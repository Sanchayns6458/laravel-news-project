<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    public function newsForm() {
        return view( 'page.create-news' );
    }
}
