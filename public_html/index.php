<?php

class Page
{

  private $title = '';
  private $viewParh;

  function __construct() {
    $this->viewParh = dirname(__DIR__) . '/views';
  }

  public function run()
  {
    $viewName = $this->getViewName($_SERVER['REQUEST_URI']);
    $content = $this->render($viewName);
    require $this->viewParh . '/_tpl.php';
  }

  private function render($viewName)
  {
    $viewFile = $this->viewParh . '/' . $viewName . '.php';
    if ( !file_exists($viewFile) ) {
      $viewFile = $this->viewParh . '/error.php';
    }
    ob_start();
    require $viewFile;    
    return ob_get_clean();
  }

  private function getViewName($uri)
  {
    if ( $uri === '/' ) $uri = '/index.html';
    return substr($uri, 0, -5);
  }
  private function requireView()
  {

  }

}

(new Page)->run();

