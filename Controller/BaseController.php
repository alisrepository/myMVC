<?php

class BaseController{
    function view($location, $data = array()){
        foreach ( $data as $key => $value ) { $$key = $value; }
        include('./View/'.$location);
    }
}