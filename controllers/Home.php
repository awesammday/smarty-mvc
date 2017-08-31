<?php

    class Home {
        private $app;
        function __construct($app){
            $this->app = $app;
            $this->app->set('title', 'Default Template');
        }
        
        function index(){
            $this->app->render('templates/default');
        }
    }

?>