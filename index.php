<?php


include ('./core/autoloader.php');
$autoloader =  new autoloader();
$autoloader->addDirectories(array('./models'));
$autoloader->register();
class siteParts{
    protected $view;
    private $oView;

    public function getController()
    {
        if(!file_exists('./controllers/' . $_GET['controller'] . '.php'))
        {
            throw new Exception('controller '.$_GET['controller'].' was not found');
        }
        include_once('./controllers/' . $_GET['controller'] . '.php');
        $obj = new $_GET['controller'];
        if(!method_exists($obj,$_GET['action']))
        {
            throw new Exception('method '.$_GET['action'].' was not found');

        }
        $this->oView = new $_GET['controller'];
        $method = $_GET['action'];
        $this->oView->$method();

    }


}
class layout extends siteParts
{
    public function runSite()
    {
        if(empty($_GET))
        {
            $_GET['controller'] = 'content';
            $_GET['action'] = 'home';
        }
        
        session_start();
     
        $this->getLayout();
    }

    public function closeSite() 
    {
        $this->getLayoutFooter();
    }
    
    private function getLayout()
    {
       // $this->getController();


        if(file_exists('./layouts/layout.phtml'))
        {
            include('./layouts/layout.phtml');
        }else
        {
            throw new Exception('layout '.'layout.phtml'.' was not found');
        }

    }

    private function getLayoutFooter()
    {
        if(file_exists('./layouts/layout_footer.phtml'))
        {
            include('./layouts/layout_footer.phtml');
        }else
        {
            throw new Exception('layout '.'layout_footer.phtml'.' was not found');
        }

    }

}

$site =  new layout();
$site->runSite();
try{
    $actions = new siteParts();
    $actions->getController();

    $site->closeSite();

}catch (Exception $e)
{
    $error = '<p class="error">'.$e->getMessage().'</p>';
    echo $error;
}




?>