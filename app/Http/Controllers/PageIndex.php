<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cate_breed;
use App\Models\cate_barking;
use App\Models\cate_characteristics;
use App\Models\cate_coat;
use App\Models\cate_group;
use App\Models\cate_activity_lv;
use App\Models\cate_national;
use App\Models\cate_shedding;
use App\Models\cate_size;
use App\Models\cate_trainability;
use App\Models\cate_dogname;
use App\Models\CreatePost;
use Illuminate\Support\Facades\DB;

class PageIndex extends Controller
{
    //
    public function index_page(){
        $title='Home Page';
        $post_index=DB::table('posts_p')->take(6)->inRandomOrder()->get();
        return view('Clients.index', compact('title') )->with('post_index',$post_index);
       

    }
}
