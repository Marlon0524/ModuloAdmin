<?php  


namespace Mini\Controller;


class consultaEgresadosDesempleadosController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/consultaEgresadosDesempleados/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}