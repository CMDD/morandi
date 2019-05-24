<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    public function index(){
        $blogs = Blog::all();
        return view('blog')->with('blogs',$blogs);
    }
    public function create(){
        return view('admin.blog.crear');
    }

    public function store(Request $request){
        $blog = new Blog();
        $blog->titulo = $request->titulo;
        $blog->estado = $request->estado;
        $blog->descripcion = $request->descripcion;
        $blog->descripcion_corta = $request->descripcion_corta;
        $blog->image = $request->file('image')->store('blog');
        $blog->save();
        return back();
    }
}
