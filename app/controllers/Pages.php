<?php 

class Pages extends Controller{
    // Index Method
    public function index(){
        $this->view('hello');
    }

}