<?php
    require_once('smarty/Smarty.class.php');
    require_once('smarty/config/template_config.php');
    require_once('smarty/config/routes.php');

    class Template {
        private $_smarty;
        public $_routes;
        public $_controller_dir;

        function __construct(){
            $this->_smarty = new Smarty();
            
            global $route;
            $this->_routes = $route;
            
            global $template_config;
            $this->_smarty->template_dir = $template_config['template_dir'];
            $this->_smarty->compile_dir = $template_config['compile_dir'];
            $this->_smarty->cache_dir = $template_config['cache_dir'];
            $this->_smarty->config_dir = $template_config['config_dir'];

            $this->_controller_dir = $template_config['controller_dir'];
        }

        function render($template){
            $this->_smarty->display($template . '.tpl.html');
        }

        function set($key, $value){
            $this->_smarty->assign($key, $value);
        }
    }
?>