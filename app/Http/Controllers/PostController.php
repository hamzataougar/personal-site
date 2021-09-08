<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Profile;

class PostController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $profile = Profile::latest()->first();
        $post = Post::findOrFail($id);
        $author = User::findOrFail($post->author_id);
        $category = Category::findOrFail($post->category_id);
        
        return view('blog.single',['post'=> $post,'category'=>$category,'author'=>$author,'profile'=>$profile]);  
    }
}
