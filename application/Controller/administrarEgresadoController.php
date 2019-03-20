<?php  


namespace Mini\Controller;


class administrarEgresadoController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/administrarEgresado/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}