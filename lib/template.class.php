<?php
    require_once('smarty/Smarty.class.php');
    require_once('smarty/config/template_config.php');
    require_once('smarty/config/routes.php');

    class Template {
        private $_smarty;
        public $_routes, $_controller_dir, $_template_name, $_template, $extra_css = '', $extra_js = '';

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

        function add_css($css){
            $this->extra_css .= "<link rel='stylesheet' href='$css'>\n";
        }

        function add_js($js){
            $this->extra_js .= "<script src='$js'></script>\n";
        }

        function set_template($template_name){
            $this->_template_name = $template_name;
        }

        function load_sub($key, $view){
            $this->_template['sub'][$key] =  $this->_smarty->fetch($view . '.tpl.html');
        }

        function load($view){
            $this->load_sub('content', $view);
            $this->set('extra_css', $this->extra_css);
            $this->set('extra_js', $this->extra_js); 

            foreach($this->_template['sub'] as $key => $value){
                $this->set($key, $value);
            }
            
            $this->_smarty->display($this->_template_name . '.tpl.html');
        }

        function set($key, $value){
            $this->_smarty->assign($key, $value);
        }
    }
?>