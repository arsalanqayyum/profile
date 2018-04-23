<?php

namespace App\Http\Controllers;

use App\clients;
use App\posts;
use App\slider;
use App\widgets;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class maincontroller extends Controller
{
    public function getdata(){
        $sliders = slider::all();
        $posts = posts::all();
        $widget = widgets::all();
        $team = DB::table('posts')->whereIn('id',[3,4,5])->get();
        $work = DB::table('posts')->whereIn('id',[7,8,9,10,11])->get();
        $client = clients::all();
        return view('contentpage',compact('sliders','posts','widget','team','work','client'));
    }

}
