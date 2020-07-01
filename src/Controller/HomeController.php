<?php
namespace App\Controller;

use App\Entity\Article;
use App\Entity\Pic;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\PicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/")
     */
    class HomeController extends AbstractController
    {
        /**
         * @Route("/", name="index")
         */
        public function index()
        {
            return;
        }
    }