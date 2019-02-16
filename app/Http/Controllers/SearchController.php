<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;


class SearchController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function action(Request $request)
    {
        $no_of_rooms = $request->get('no_of_rooms');
        $location=$request->get('location');
        $price=$request->get('cost');
        $posts = DB::table('posts')
            ->Where('no_of_rooms', $no_of_rooms)
            ->orWhere('location',  $location)
            ->orWhere('price',  $price)
            ->orderBy('id', 'desc')
            ->simplePaginate(9);
        return view('search')->with('posts',$posts);
    }
}
