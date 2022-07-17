<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Blog;

use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        if (auth::user()->usertype == '0') {
            $admin= False;
        }
        else {
            $admin = True;
        } 
        return view('blog.index',compact('blogs','admin'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {

        $data = request()->validate([
            'author' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'article' => ['required', 'string', 'max:512'],
            'image' => ['image'],
            
        ]);

        $imagePath = request('image')->store('uploads','public');
        Blog::create([
            'author' => $data['author'],
            'title' => $data['title'],
            'article' => $data['article'],
            'image' => $imagePath,
            
        ]);
        // needed to add alert messge 
        
        return redirect('/blog');
    }

    public function show($blog)
    {
        $blog = Blog::FindOrFail($blog);
        
        if (auth::user()->usertype == '0') {
            $admin= False;
        }
        else {
            $admin = True;
        } 
        
        return view('blog.show',compact('blog','admin'));
    }

    public function destroy($blog)
    {
        Blog::FindOrFail($blog)->delete();
        return redirect('/blog');
    }

}
