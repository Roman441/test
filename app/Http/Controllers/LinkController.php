<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    public function index()
    {
            $links = DB::select('select link, user, count(*) from links group by link, user');
            return view('link.index', compact('links'));
    }
    public function create(Request $request){
        $link = Link::create(['link'=>$request['link'], 'user'=>$request['user'], 'count'=> 1]);
   }
}

