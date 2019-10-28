<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = DB::table('gallery')->inRandomOrder()->get();

        return view('gallery', ['pictures' => $gallery])->with('title','Gallery');
    }

     public function property($property)
    {
        $pictures = DB::table('gallery')
        								->join('properties','properties.id','=','gallery.properties_id')
        								->where('properties.property_pretty_name','=',$property)->inRandomOrder()->get();
        $property = DB::table('properties')->where('property_pretty_name', '=', $property)->get();								


        return view('gallery_property', compact('pictures','property'))->with('title','Gallery');
    }
}
