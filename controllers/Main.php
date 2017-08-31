<?php

    class Main {
        private $app;
        function __construct($app){
            $this->app = $app;            
            $this->app->set_template('templates/default');
            $this->app->load_sub('header', 'components/header');
            $this->app->load_sub('footer', 'components/footer');
        }
        
        function index(){
            $this->app->set('title', 'Home');
            $this->app->load('public/home');
        }

        function features(){
            $this->app->add_js('/dist/holder/holder.js');
            $this->app->set('title', 'Features');            
            $this->app->load('public/features');
        }

        function contact(){
            $this->app->set('title', 'Contact');
            $this->app->load('public/contact');
        }
    }

?>