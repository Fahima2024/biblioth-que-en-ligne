<?php
namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'homepage')]
    public function index(BookRepository $bookRepository): Response
    {
      
        $books = $bookRepository->findAll();

  
        return $this->render('homepage/index.html.twig', [
            'books' => $books,
        ]);
    }
}
