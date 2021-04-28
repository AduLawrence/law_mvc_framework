<?php
  /**
   *
   */
  class Home extends Controller
  {

    function __construct($controller, $action)
    {
      // code...
      parent::__construct($controller, $action);
      // $this->view->setLayout('default');

    }

    public function indexAction(){
      $this->view->render('home/index');
    }

  }

?>
