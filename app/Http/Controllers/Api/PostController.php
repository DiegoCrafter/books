<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Tasa;
use App\Post;
use App\Category;
use App\Tag;
use DB;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->get();
        return $posts;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('user')->with('tags')->with('category')->get();
        return $post;
    }

    public function tasaindex()
    {
        $tasa = Tasa::orderBy('id', 'ASC')->where('moneda','SOLES')->get();
        $time = Tasa::max('created_at');
        return ['data' => $tasa, 'time' => $time ];
    }

    public function dolarindex()
    {
        $tasa = Tasa::orderBy('id', 'ASC')->where('moneda','DOLARES')->get();
        $time = Tasa::max('created_at');
        return ['data' => $tasa, 'time' => $time ];
    }

}
