<?php

class Pages extends Controller{

    public function __construct(){

        // echo 'Pages loaded';
        $this->postModel = $this->model('Post');

    }

    public function index(){

        $posts = $this->postModel->getPosts();

        //forma 2
        $data = [
            'title' => 'Welcome',
            'posts' => $posts
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