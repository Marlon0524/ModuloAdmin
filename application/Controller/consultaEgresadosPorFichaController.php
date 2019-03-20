<?php  


namespace Mini\Controller;


class consultaEgresadosPorFichaController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/consultaEgresadosPorFicha/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}