<?php

class autoloader{

    private $folders = array();

    private function loadclass($class){
        if($class[0] == '\\')
        {
            $class = substr($class,1);
        }

        $path = str_replace(array('\\','_'),'/',$class).'.php';
        foreach ($this->folders as $folder)
        {
            if(file_exists($path)){
                require_once $path;
                return true;
            }
        }
    }

    public function register()
    {
        spl_autoload_extensions('php');
        spl_autoload_register(array($this,"loadclass"));
    }

    public function addDirectories($folders)
    {
        $this->folders = (array) $folders;
    }
}
