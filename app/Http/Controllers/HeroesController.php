<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HeroesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $heroes = DB::table('heroes')->get();
        $abilities = DB::table('abilities')->get();
        return view('heroes',compact('heroes','abilities'));
    }

    public function getBio(Request $request)
    {
        $id = $request->heroid;
        $bio = DB::table('stories')->where('st_id', $id)->first();
    	return json_encode($bio);
    }

    public function getAbilities(Request $request)
    {
        echo "<script type='text/javascript'>alert('controller');</script>";
        $ability = DB::table('abilities')->select('name', 'email as user_email')->get();
        return json_encode($ability);
    }
}
