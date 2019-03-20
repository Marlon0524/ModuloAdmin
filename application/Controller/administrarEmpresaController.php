<?php  


namespace Mini\Controller;


class administrarEmpresaController
{
public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/administrarEmpresa/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
}