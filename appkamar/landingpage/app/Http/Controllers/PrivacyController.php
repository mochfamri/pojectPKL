<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index ()
    {
        $data['content'] = Privacy::all();
        // dd($data['content']);
        return view('PrivacyPolicy', [
        'data'=>$data['content'], 
        'tittle' => 'Privacy Policy', 
    ]);
    }
    
    // public function show($slug)
    // {
    //     return view('PrivacyPolicy', [
    //         "tittle" => "PrivacyPolicy",
    //         "privacy" => Privacy::find($slug)
    //     ]);
    // }
}
