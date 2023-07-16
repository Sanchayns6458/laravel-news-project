<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    function homePage() {
        return view( 'index' );
    }
}
