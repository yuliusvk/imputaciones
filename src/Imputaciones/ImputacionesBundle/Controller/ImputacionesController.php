<?php

namespace Imputaciones\ImputacionesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Symfony\Component\HttpFoundation\Response;

class ImputacionesController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        $session->set('idUsuario', '1');

        return $this->render('ImputacionesImputacionesBundle:Imputaciones:index.html.twig', array('name' => 'nombre a mostrar'));
        //return new Response('<html><body>Pagina de inicio</body></html>');
        // si utilizas PHP en vez de Twig
        // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }

    function diarioAction()
    {
        $anioActual = 2014;
        $mesActual = 8;
        return $this->render('ImputacionesImputacionesBundle:Imputaciones:diario.html.twig' , array('anio' => $anioActual, 'mes' => $mesActual));
    }
}
