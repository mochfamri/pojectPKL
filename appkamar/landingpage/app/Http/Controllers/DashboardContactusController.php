<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Contactus as GlobalContactus;
use Illuminate\Http\Request;

class DashboardContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = contactus::all();
        // return view ('admin.mail.index', [
        //     'data'=> contactus::all()
            
        // ]);
        $data['content'] = Contactus::all();
        // dd($data['content']);
        return view('admin.mail.index', [
        'data'=>$data['content']
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $contactus->name;
        // dd($id);
        return view('admin.mail.show', [
            'data' => Contactus::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactus::destroy($id);

        return redirect('/mail')->with('success', 'Message has been deleted!');
    }
    // public function show($slug)
    // {
    //     return view('PrivacyPolicy', [
    //         "tittle" => "PrivacyPolicy",
    //         "privacy" => Privacy::find($slug)
    //     ]);
    // }
}
