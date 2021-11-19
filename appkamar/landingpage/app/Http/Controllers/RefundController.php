<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function index ()
    {
        $data['content'] = Refund::all();
        // dd($data['content']);
        return view('Refund', ['data'=>$data['content'], 'tittle' => 'Refund Policy' ]);
    }
}
