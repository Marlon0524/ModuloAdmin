<?php  


namespace Mini\Controller;


class CrearEventoController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/crearEvento/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}