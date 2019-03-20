<?php  


namespace Mini\Controller;


class gruposController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/grupos/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}