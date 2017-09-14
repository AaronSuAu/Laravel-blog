<?php
    namespace App\Http\Controllers;

    use App\Post;

    class PagesController extends Controller{
        public function getIndex(){
            $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
            return view('pages/welcome')->with("posts", $posts);
        }
        public function getAbout(){
            $firstName = "Aaron";
            $lastName = "Su";

            $fullName = $firstName." ".$lastName;
            $email = "aaroncareer.au@gmail.com";
            $data =[];
            $data['email']= $email;
            $data['fullName'] = $fullName;
            /*return view('pages/about')->with("fullName", $fullName)
                ->with("email", $email);*/
            return view('pages/about')->with("data", $data);
        }
        public function getContact(){
            return view('pages/contact');
        }
    }
