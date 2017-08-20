<?php
    namespace App\Http\Controllers;

    class PagesController extends Controller{
        public function getIndex(){
            return view('pages/welcome');
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
