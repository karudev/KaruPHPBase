<?php

class View{
    public $layoutPath = '/../../Views/layout.php';
    public $renderLayout;
    
    public function __construct($renderLayout = true) {
        $this->renderLayout = $renderLayout;
      
    }
    public function render($fileName,$data = []){
       
        ob_start();
        //require __DIR__.'/../Views/'.$fileName;
        require $this->renderLayout ? __DIR__.$this->layoutPath :  __DIR__.'/../../Views/'.$fileName;
        $html = ob_get_contents();
        ob_end_clean();
       
        echo  $html;
    }
   
}
?>
