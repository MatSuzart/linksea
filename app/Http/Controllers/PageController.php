<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::where('slug',$slug)->frist();

        if($page){
            echo 'PAGE';
        }else{
            return view('notfound');
        }
    }
}
