<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Event\CommentCreatedEvent;
use App\Form\CommentType;
use App\Repository\PostRepository;
use App\Repository\TagRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage home contents in the public part of the site.
 *
 * @Route("/")
 *
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", methods="GET", name="home_index")
     *
     * NOTE: For standard formats, Symfony will also automatically choose the best
     * Content-Type header for the response.
     * See https://symfony.com/doc/current/routing.html#special-parameters
     */
    public function index(Request $request): Response
    {

        $test = "Bob";
        $video_url = array(
            array('video' => "https://samuelpelletier.fr/MyFavorite4Chan/video/drive_style.webm"),
            array('video' => "https://samuelpelletier.fr/MyFavorite4Chan/video/grow_up.webm "),
            array('video' => "https://samuelpelletier.fr/MyFavorite4Chan/video/wooden_dance.webm"),
            array('video' => "https://samuelpelletier.fr/MyFavorite4Chan/video/nice_shot.webm")
        );

        return $this->render('home/index.html.twig', ["test" => $test, 'videos' => $video_url]);
    }
}
