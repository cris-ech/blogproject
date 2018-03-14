<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    /**
     * @Route("/", name="post")
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();


        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'posts' => $posts ,
        ]);
    }
}
