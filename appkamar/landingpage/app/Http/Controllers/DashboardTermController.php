<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;

class DashboardTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.term.index', [
            'data' => Term::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.term.create');
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

        $validatedData['id'] = new term;
        $validatedData['body'] = strip_tags($request->body);
        Term::create($validatedData);

        return redirect('/term')->with('success', 'New privacy policy has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        return view('admin.term.show', [
            'data' => $term 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        return view('admin.term.edit', [
            'term' => $term,
            'data' => $term::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term)
    {
        $validatedData = $request->validate([
            // 'id' => $request->user()->id,
            'tittle' => 'required|max:225',
            'body' => 'required'
        ]);
        
        // $validatedData['user_id'] = $request->user()->id;
        $validatedData['body'] = strip_tags($request->body);
        Term::where('id', $term->id)
        ->update($validatedData);

        return redirect('/term')->with('success', 'Term policy has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        Term::destroy($term->id);

        return redirect('/term')->with('success', 'Term policy has been deleted!');
    }
}
