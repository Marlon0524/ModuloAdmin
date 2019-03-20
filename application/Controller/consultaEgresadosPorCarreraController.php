<?php  


namespace Mini\Controller;


class consultaEgresadosPorCarreraController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/consultaEgresadosPorCarrera/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}