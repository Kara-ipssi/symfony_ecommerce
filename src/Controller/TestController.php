<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    #[Route(path: "/", name: "index")]
    public function index()
    {
        return new Response("ça fonctionne !");
    }

    #[Route(path: "/test/{age<d\+>?0}", name: "test", methods: ['GET', "POST"])]
    public function test(Request $request, int $age)
    {

        return new Response("vous avez $age ans !");
    }
}
