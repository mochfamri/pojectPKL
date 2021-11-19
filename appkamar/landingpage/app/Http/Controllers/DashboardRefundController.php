<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

class DashboardRefundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.refund.index', [
            'data' => Refund::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.refund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'tittle' => 'required|max:225',
            'body' => 'required'
        ]);

        $validatedData['id'] = new refund;
        $validatedData['body'] = strip_tags($request->body);
        Refund::create($validatedData);

        return redirect('/refund')->with('success', 'New privacy policy has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function show(Refund $refund)
    {
        return view('admin.refund.show', [
            'data' => $refund 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function edit(Refund $refund)
    {
        return view('admin.refund.edit', [
            'refund' => $refund,
            'data' => $refund::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refund $refund)
    {
        $validatedData = $request->validate([
            // 'id' => $request->user()->id,
            'tittle' => 'required|max:225',
            'body' => 'required'
        ]);
        
        // $validatedData['user_id'] = $request->user()->id;
        $validatedData['body'] = strip_tags($request->body);
        Refund::where('id', $refund->id)
        ->update($validatedData);

        return redirect('/refund')->with('success', 'Refund policy has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refund  $refund
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refund $refund)
    {
        Refund::destroy($refund->id);

        return redirect('/refund')->with('success', 'Refund policy has been deleted!');
    }
}
