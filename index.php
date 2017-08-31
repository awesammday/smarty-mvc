<?php
    require_once('lib/template.class.php');    
    $app = new Template();
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $url_path = parse_url($url, PHP_URL_PATH);
    ($url_path === '/') ? $url_path = 'default_controller' : '';
    $url_path = trim($url_path, '/');

    if(isset($app->_routes[$url_path])){
        $controller = array(
            'name' => explode('/', $app->_routes[$url_path])[0],
            'path' => $app->_controller_dir . explode('/', $app->_routes[$url_path])[0] . '.php',
            'method' => (isset(explode('/', $app->_routes[$url_path])[1])) ? explode('/', $app->_routes[$url_path])[1] : 'index'
        );
        
        if(file_exists($controller['path'])){
            
            require($controller['path']);
            $active_controller = new $controller['name']($app);
            $active_method = $controller['method'];
            $active_controller->$active_method();

        }else{
            // throw 404 page here
        }
    }    

?>