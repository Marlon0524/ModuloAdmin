<?php  


namespace Mini\Controller;


class publicacionesEnEsperaController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/publicacionesEnEspera/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}