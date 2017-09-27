<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 9/21/17
 * Time: 4:04 PM
 */

namespace App\Http\Controllers;

use App\Http\Request;
use App\Post;

class BlogController
{
    public function getIndex(){
        $posts = Post::paginate(10);

        return view('blog.index')->with("posts", $posts);

    }

    public function getSingle($slug){
        // fetch from the DB based on slug
        $post = Post::where('slug', '=', "$slug")->first();
        // return the view and pass in the post object
        return view('blog.single')->with("post", $post);
    }


}