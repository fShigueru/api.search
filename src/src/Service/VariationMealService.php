<?php


namespace App\Service;

use App\Document\VariationMeal;
use App\Repository\VariationMealRepository;
use Symfony\Component\HttpFoundation\Request;

class VariationMealService
{

    /* @var VariationMealRepository */
    protected $variationMealRepository;

    /**
     * VariationMealService constructor.
     * @param VariationMealRepository $variationMealRepository
     */
    public function __construct(VariationMealRepository $variationMealRepository)
    {
        $this->variationMealRepository = $variationMealRepository;
    }


    public function create(Request $request) : VariationMeal
    {
        $variationMeal = new VariationMeal();
        $variationMeal->setVariationId($request->get('id'));
        $variationMeal->setName($request->get('name'));
        $variationMeal->setDescription($request->get('description'));
        $variationMeal->setPrice($request->get('price'));
        $variationMeal->setMealId($request->get('mealId'));
        $variationMeal->setMealName($request->get('mealName'));
        $variationMeal->setMealDescription($request->get('mealDescription'));
        $variationMeal->setImage($request->get('image'));
        $variationMeal->setPosition($request->get('position'));
        $variationMeal->setSlug($request->get('slug'));
        $variationMeal->setCategoryName($request->get('categoryName'));
        $variationMeal->setCategorySlug($request->get('categorySlug'));
        $variationMeal->setStatus($request->get('status'));
        $variationMeal->setRestaurantId($request->get('restaurantId'));
        $variationMeal->setRestaurantName($request->get('restaurantName'));
        $variationMeal->setRestaurantSlug($request->get('restaurantSlug'));
        $variationMeal->setScore($request->get('score'));
        $variationMeal->setStreet($request->get('street'));
        $variationMeal->setNumber($request->get('number'));
        $variationMeal->setNeighborhood($request->get('neighborhood'));
        $variationMeal->setCep($request->get('cep'));
        $variationMeal->setLocation($request->get('location'));
        $variationMeal->setCity($request->get('city'));
        $variationMeal->setUf($request->get('uf'));


        $this->variationMealRepository->create($variationMeal);
        return $variationMeal;
    }


}