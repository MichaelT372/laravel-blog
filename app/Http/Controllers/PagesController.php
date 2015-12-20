<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $data = [
            'first' => 'Michael',
            'last' => 'Thomas',
            'people' => [
                'Taylor',
                'Dayle',
                'Eric'
            ]
        ];

        return view('pages.about', $data);
    }

    public function contact()
    {
        return view('pages.contact'); 
    }
}
