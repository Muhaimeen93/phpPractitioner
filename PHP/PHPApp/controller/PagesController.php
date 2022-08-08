<?php

namespace PHPApp\Controller;

class PagesController {

    public function home()
    {
        
        require view('index');
    }

    public function about()
    {
        $company = "Wayne State";
        require view('about',['company'=>$company]);
    }

    public function contact()
    {
        require view('contact');

    }
}