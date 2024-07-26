<?php

//Local onde fica o arquivo
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController {

    #[Route('/')]
    public function index(): Response {
        return new Response('Olá, mundo!');
    }

    #[Route('/animal/{slug}')]
    //O nome que eu passar na URL vai virar uma variável aqui na minha action
    //Caso eu não passe nenhum valor na URL, ele vai retornar apenas a string 'Olá,'
    public function animal(string $slug=null): Response {
        //Pego a variável Slug, procuro por '-', e no lugar substituo por ' ', devolvendo para $newSlug
        $newSlug = str_replace('-', ' ',$slug);
        //Pegando a variável $newSlug e transformando em título
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, '.$newSlug);
        



    }


    






    




    


     

}