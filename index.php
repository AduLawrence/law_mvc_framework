<?php
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', dirname(__FILE__));

  $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

  //load configuration and helper functions
  require_once(ROOT.DS.'config'.DS.'config.php');
  require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');

  //autoload classes
  spl_autoload_register('loadClasses');

  function loadClasses($className){
    if(file_exists(ROOT.DS.'core'.DS.$className.'.php')){
      require_once(ROOT.DS.'core'.DS.$className.'.php');
    }else if(file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php')){
      require_once(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php');
    }else if(file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php')){
      require_once(ROOT.DS.'app'.DS.'models'.DS.$className.'.php');
    }

  }

  session_start();

  if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)){
    Users::loginUserFromCookie();
  }

  //route the request
  Route::routeAction($url);

 ?>
