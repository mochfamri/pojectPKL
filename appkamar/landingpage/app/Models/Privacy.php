<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Privacy extends Model
{
    use HasFactory;
    // protected $fillable = ['title']; 
    protected $guarded = ['id','created_at','updated_at'];
     
    // ,Sluggable;
    
    // public function show($slug)
    // {
    //     return view('PrivacyPolicy', [
    //         "tittle" => "PrivacyPolicy",
    //         "privacy" => Privacy::find($slug)
    //     ]);
    // }
    public function getRouteKeyName()
    {
        return 'id';
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'tittle'
    //         ]
    //     ];
    // }
}
