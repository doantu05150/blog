<?php

namespace App\Controller;


class PagesController {

    public function home () {

        
        return view('index');

    }

    public function contact () {

        return view('contact');

    }

    public function about () {
        
        return view('about');
                
    }

    public function login () {
        
        return view('login');
                
    }


    public function register () {
        
        return view('register');
                
    }

    public function message () {

        return view('message');
        
    }
}