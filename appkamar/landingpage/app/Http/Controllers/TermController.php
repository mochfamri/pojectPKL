<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index ()
    {
        $data['content'] = Term::all();
        // dd($data['content']);
        return view('Terms', ['data'=>$data['content'], 'tittle' => 'Term & Conditions' ]);
    }
}
