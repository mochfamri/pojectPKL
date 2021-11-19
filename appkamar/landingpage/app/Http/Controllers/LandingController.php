<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index ()
    {
        $data['content'] = About::all();
        // dd($data['content']);
        return view('home', [
        'data'=>$data['content']
    ]);
    }
}
