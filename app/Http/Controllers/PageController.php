<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index($slug){
        //$page = Page::where('slug',$slug)->frist();

        $links = [];

        if($page){
            return view('page',[
                'font_color'=>$page->op_font_color,
                'profile_image'=>url('media/uploads').'/'.$page->op_profile_image,
                'title'=>$page->op_title,
                'description'=>$page->op_description,
                'fb_pixel'=>$page->op_fb_pixel,
                'bg'=>$bg,
                'links'=>$links
            ]);
        }else{
            return view('notfound');
        }
    }
}
