<?php 

class Pages extends Controller{
    
    public function __construct(){
        // Constructor code here ...
    }

    public function index(){
        $data = [
            'title' => 'Welcome'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            "title" => "About Us"
        ];

        $this->view("pages/about", $data);
    }


}