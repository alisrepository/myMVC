<?php

class BaseController{
    function view($location, $data = array()){
        foreach ( $data as $key => $value ) { $$key = $value; }
        
        $base_url = 'http://localhost/myMVC/';

        include('./View/'.$location);
    }

    function getPost(){
        return $_POST;
    }
}