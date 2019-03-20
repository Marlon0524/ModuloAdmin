<?php  


namespace Mini\Controller;


class consultaEgresadosPorAnoController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/consultaEgresadosPorAno/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}