<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function index()
    {
        $guestBooks = DB::table('guestbooks')->inRandomOrder()->get();

        return view('guestbook', ['guestbooks' => $guestBooks])->with('title','Guestbook');
    }
     public function property($property)
    {
        $guestbooks = DB::table('guestbooks')
        								->join('properties','properties.id','=','guestbooks.properties_id')
        								->where('properties.property_pretty_name','=',$property)->inRandomOrder()->get();
        $property = DB::table('properties')->where('property_pretty_name', '=', $property)->get();								


        return view('guestbooks_property', compact('guestbooks','property'))->with('title','Guestbook');
    }
}
