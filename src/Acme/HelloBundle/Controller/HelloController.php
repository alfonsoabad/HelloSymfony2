<?php
/*
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller

// http://api.symfony.com/2.0/Symfony/Component/HttpFoundation/File/UploadedFile.html
*/

namespace Acme\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class HelloController extends Controller
{
    public function indexAction($name)
    {
    	// $fileUpload = new UploadedFile();
    	$ResponseString = '<html><body>Hello '.$name.'!</body></html>';

		// return new Response($ResponseString);
    	
    	return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name ));
    }
}


