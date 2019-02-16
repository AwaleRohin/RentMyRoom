<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\Paginator;
use App\Post;
use DB;

class PostsController extends Controller
{   public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','search']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $posts=Post::all();
        $posts = Post::orderBy('created_at','desc')->simplePaginate(9);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $this->validate(request(),[
            
        ]); 

        //Handle File Upload
        if($request->hasFile('cover_img')){
            //Get file name with extension
            $filenamewithExt=$request->file('cover_img')->getClientOriginalName();
            //Get just file name
            $filename=pathinfo($filenamewithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension=$request->file('cover_img')->getClientOriginalExtension();
            //File name to store
            $filenametostore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path= $request->file('cover_img')->storeAs('public/cover_img',$filenametostore);
        } 
        else{
            $filenametostore='noimage.jpg';
        }   

        //Create Post
        $post= new Post;
        $post->name = auth()->user()->name;
        $post->no_of_rooms = $request->input('no_of_rooms');
        $post->location = $request->input('location');
        $post->facilities = $request->input('facilities');
        $post->price = $request->input('cost');
        $post->user_id= auth()->user()->id;
        $post->email= auth()->user()->email;
        $post->cover_img= $filenametostore;
        $post->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.view')->with('post',$post);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        //Check for correct user
        if(auth()->user()->id!==$post->user_id){
            return redirect('/posts');
        }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
        ]); 
         // Handle File Upload
         if($request->hasFile('cover_img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_img')->storeAs('public/cover_img', $fileNameToStore);
        }
        //Find Post
        $post= Post::find($id);
        $post->name = auth()->user()->name;
        $post->no_of_rooms = $request->input('no_of_rooms');
        $post->location = $request->input('location');
        $post->facilities = $request->input('facilities');
        $post->price = $request->input('cost');
        $post->user_id= auth()->user()->id;
        $post->email= auth()->user()->email;
        if($request->hasFile('cover_img')){
            $post->cover_img = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts');
        }
        if($post->cover_img != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_img/'.$post->cover_img);
        }
        
        $post->delete();
        return redirect('/dashboard');
    }
    
}
