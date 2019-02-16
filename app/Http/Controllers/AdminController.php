<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class AdminController extends Controller
{

	public function adminDashboard()
	{
        $users=DB::select('select * from users where isAdmin=0');
        $posts=DB::select('select * from posts');
    	return view('/admin', ['users'=>$users, 'posts'=>$posts]);
	}
	public function users()
	{
		$users=DB::select('select * from users where isAdmin=0');
		return view('/users')->with('users',$users);
	}
}