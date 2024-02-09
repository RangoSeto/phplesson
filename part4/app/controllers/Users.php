<?php

ini_set('display_errors',1);

class Users extends Controller{

    public function __construct(){
        
    }

    public function register(){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);


            $data = [
                "fullname"=>trim($_POST['fullname']),
                "email"=>trim($_POST['email']),
                "password"=>trim($_POST['password']),
                "confirmpassword"=>trim($_POST['confirmpassword']),
                "fullnameerr"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
                "confirmpassworderr"=>"",

            ];

            if(empty($data['fullname'])){
                $data['fullnameerr'] = "Please enter full name";
            }

            if(empty($data['email'])){
                $data['emailerr'] = "Please enter email";
            }

            if(empty($data['password'])){
                $data['passworderr'] = "Please enter password";
            }elseif(strlen($data['password']) < 5){
                $data['passworderr'] = "Passwordd must be at least 5 characters";
            }

            if(empty($data['confirmpassword'])){
                $data['confirmpassworderr'] = "Please enter confirm password";
            }else{

                if($data['confirmpassword'] != $data['password']){
                    $data['passworderr'] = "Passwordd do not match";
                }
            }

            $this->view('users/register',$data);

        }else{

        }

        // echo $_POST['fullname'];

        $this->view('users/register');
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        
            $data = [
                "email"=>trim($_POST['email']),
                "password"=>trim($_POST['password']),
                "emailerr"=>"",
                "passworderr"=>"",

            ];

            if(empty($data['email'])){
                $data['emailerr'] = "Please enter email";
            }

            if(empty($data['password'])){
                $data['passworderr'] = "Please enter password";
            }

            $this->view('users/login',$data);

        }else{

        }

        $this->view('users/login');
    }

}

?>