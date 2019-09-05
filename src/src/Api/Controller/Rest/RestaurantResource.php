<?php

namespace App\Api\Controller\Rest;

use App\Entity\Restaurant;
use App\Service\RestaurantService;
use FOS\RestBundle\FOSRestBundle;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\Model;

class RestaurantResource extends FOSRestBundle
{
    /**
     * Creates an Restaurant resource
     * @Rest\Post("/restaurant")
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return View::create([$request->get('restaurant')], Response::HTTP_OK);
    }

    /**
     * All restaurant with meal
     * @Rest\Get("/restaurant")
     * @param Request $request
     * @return View
     */
    public function all(Request $request): View
    {
        return View::create([], Response::HTTP_OK);
    }

}