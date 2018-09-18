<?php

class Pages extends Controller{

    public function __construct(){

        // echo 'Pages loaded';

    }

    public function index(){

        //forma 2
        $data = [
            'title' => 'Welcome'
        ];
        
        $this->view('pages/index', $data);

        // $this->view('pages/index', ['title' => 'Welcome']);//forma 1
        
    }

    public function about(){

        //forma 2
        $data = [
            'title' => 'About Us'
        ];
        
        $this->view('pages/about', $data);

        // $this->view('pages/index', ['title' => 'Welcome']);//forma 1
        
    }

}