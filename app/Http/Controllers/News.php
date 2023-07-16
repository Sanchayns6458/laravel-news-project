<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    /** this function get news create blade form */
    public function newsForm() {
        return view( 'page.create-news' );
    }

    /**
     * When user submit news form this function is activate
     * 
     * @param server post request data
     * 
     * @redirect list of all news
     */
    public function newsCreate( Request $postedNews ) {
        // $pure_posted_data = $postedNews->all();
        $postedNews->validate([
            'news_title' => 'required'
        ]);
        
       echo '<pre>'; print_r( $postedNews->all() ); die;
    }
}
