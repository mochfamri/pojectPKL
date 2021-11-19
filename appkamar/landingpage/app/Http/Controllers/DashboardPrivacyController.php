<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use CreatePrivaciesTable;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;

class DashboardPrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view ('admin.privacy.index', [
            'data' => Privacy::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privacy.create');
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

        $validatedData['id'] = new privacy;
        $validatedData['body'] = strip_tags($request->body);
        Privacy::create($validatedData);

        return redirect('/privacy')->with('success', 'New privacy policy has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        
        // dd($privacy);
        return view('admin.privacy.show', [
            'data' => $privacy 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Privacy $privacy)
    {
        return view('admin.privacy.edit', [
            'privacy' => $privacy,
            'data' => $privacy::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privacy $privacy)
    {
        $validatedData = $request->validate([
            // 'id' => $request->user()->id,
            'tittle' => 'required|max:225',
            'body' => 'required'
        ]);
        
        // $validatedData['user_id'] = $request->user()->id;
        $validatedData['body'] = strip_tags($request->body);
        Privacy::where('id', $privacy->id)
        ->update($validatedData);

        return redirect('/privacy')->with('success', 'Privacy policy has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        Privacy::destroy($privacy->id);

        return redirect('/privacy')->with('success', 'Privacy policy has been deleted!');

        
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Privacy::class, 'slug', $request->tittle);
    //     return response()->json(['slug' => $slug]);
    // }
}
