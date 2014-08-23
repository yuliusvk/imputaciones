<?php

namespace Imputaciones\ImputacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImputacionesImputacionesBundle:Default:index.html.twig', array('name' => 'nombre a mostrar'));
        //return new Response('<html><body>Pagina de inicio</body></html>');
        // si utilizas PHP en vez de Twig
        // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }
}
