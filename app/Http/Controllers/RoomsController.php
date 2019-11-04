<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
     public function property($property)
    {
        $rooms = DB::table('rooms')
        								->join('properties','properties.id','=','rooms.properties_id')
        								
        								->where('properties.property_pretty_name','=',$property)
        								->select('rooms.id', 'rooms.room_name','rooms.description','rooms.default_price')
        								->get();
        								
        $property = DB::table('properties')->where('property_pretty_name', '=', $property)->get();								


        return view('rooms_property', compact('rooms','property'))->with('title','Rooms');
    }
     public function single($room)
    {
        $rooms = DB::table('rooms')
                                       
                                        
                                        ->where('id','=',$room)
                                        
                                        ->get();
                                        
                                     


        return view('room', compact('rooms'))->with('title','Room Detail');
    }
}
