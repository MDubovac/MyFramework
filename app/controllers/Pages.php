<?php 

class Pages extends Controller{
    
    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    // Index Method
    public function index(){
        $this->view('pages/index');
    }

    // About 
    public function about(){
    $data = [
        "name" => "Mladen Dubovac",
        "age" => 22
    ];

        $this->view("pages/about", $data);
    }


}