<?php

class Mainpage extends Controller{

    public $mainmodel;
    
    public function __construct(){
        $this->mainmodel = $this->model('Main');
    }

    public function index(){

        $data = [
            "title"=>"Main",
        ];
        $this->view('mainpage/index',$data);

    }

    public function about(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }


    public function properties(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }


    public function services(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }

    public function customer(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }

    public function furniture(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }

    public function contact(){
        $data = [
            "title"=>"About",
        ];
        $this->view('mainpage/about',$data);

    }


}

?>