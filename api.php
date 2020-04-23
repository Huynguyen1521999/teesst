<?php


require 'restful_api.php';

class api extends restful_api {

    function __construct(){
        parent::__construct();
    }

    function checkyear(){
        if ($this->method == 'GET'){
            $this->response(200, $this->getyear($this->params));
        }
    }

    
    function getyear($params)
    {
        $datetime = new DateTime('2020-04-22');
$datetime->modify('+1 day');
echo $datetime->format('Y-m-d ');
        
    }

$user_api = new api();
