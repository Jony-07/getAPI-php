<?php
 class Render{
    public function render($view, $viewBag=array())
    {    
        $file = "../public/".$view;
        if(is_file($file))
        {
            extract($viewBag);
            ob_start();
            require($file);
            $content=ob_get_contents();
            ob_end_clean();
            echo $content;
        }
        else{
            echo "<h1>No existe este archivo</h1>";
        }
    }
}
?>