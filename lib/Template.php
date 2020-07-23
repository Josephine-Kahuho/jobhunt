<?php 

class Template{
    //path to the template
    protected $template;

    //variables passed in
    protected $variables = array();

    //constructor function
    public function __construct($template){
        $this->template = $template;
    }

    public function __get($key){
        return $this->variables[$key];
    }

    public function __set($key, $value){
        $this->variables[$key] = $value;
    }

    public function __toString(){
        extract($this->variables);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}