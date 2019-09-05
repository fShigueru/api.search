<?php

namespace App\Api\Controller\Rest;

use App\Document\VariationMeal;
use App\SearchRepository\VariationMealRepository;
use App\Service\VariationMealService;
use FOS\RestBundle\FOSRestBundle;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Swagger\Annotations as SWG;
use FOS\ElasticaBundle\Manager\RepositoryManagerInterface;

class MealResource extends FOSRestBundle
{
    /**
     * @Rest\Post("/meal")
     * @param Request $request
     * @return View
     * @SWG\Response(
     *     response=200,
     *     description="Return message confirmation",
     * )
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="JSON Payload",
     *          required=true,
     *          format="application/json",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(property="title", type="string", example="Mr"),
     *              @SWG\Property(property="first_name", type="string", example="Bob"),
     *              @SWG\Property(property="last_name", type="string", example="Jones"),
     *              @SWG\Property(property="address1", type="string", example="1 Mayfair"),
     *              @SWG\Property(property="address2", type="string", example="Mr"),
     *              @SWG\Property(property="town", type="string", example="London"),
     *              @SWG\Property(property="postcode", type="string", example="232323"),
     *              @SWG\Property(property="country", type="string", example="FR"),
     *              @SWG\Property(property="phone", type="string", example="34343243243"),
     *          )
     *      ),
     * @SWG\Tag(name="Meal")
     */
    public function create(Request $request, VariationMealService $variationMealService): View
    {
        try {
            $variationMeal = $variationMealService->create($request);
            return View::create(sprintf('successfully created variation %s - %s', $variationMeal->getMealName(), $variationMeal->getName()), Response::HTTP_OK);
        } catch (\Exception $exception) {
            return View::create(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * All restaurant with meal
     * @Rest\Get("/meal")
     * @param Request $request
     * @return View
     * @SWG\Response(
     *     response=200,
     *     description="Return message confirmation",
     * )
     * @SWG\Tag(name="Meal")
     */
    public function all(Request $request, VariationMealService $variationMealService): View
    {
        return View::create([], Response::HTTP_OK);
    }

    /**
     * All restaurant with meal
     * @Rest\Get("/search/meal")
     * @param Request $request
     * @return View
     * @SWG\Parameter(
     *     name="q",
     *     in="query",
     *     type="string",
     *     description="Meal name"
     * )
     * @SWG\Parameter(
     *     name="price",
     *     in="query",
     *     type="string",
     *     description="Meal price"
     * )
     * @SWG\Parameter(
     *     name="category",
     *     in="query",
     *     type="string",
     *     description="Meal category"
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Return message confirmation",
     * )
     * @SWG\Tag(name="Search")
     */
    public function search(RepositoryManagerInterface $manager, Request $request) : View
    {
        $query = $request->query->all();
        $search = isset($query['q']) && !empty($query['q']) ? $query['q'] : null;
        $price = isset($query['price']) && !empty($query['price']) ? $query['price'] : null;
        $category = isset($query['category']) && !empty($query['category']) ? $query['category'] : null;

        /** @var VariationMealRepository $repository */
        $repository = $manager->getRepository(VariationMeal::class);

        $variationMeals = $repository->search($search, $price, $category);
        $data = [];
        /** @var VariationMeal $variationMeal */
        foreach ($variationMeals as $variationMeal) {
            $data[] = [
                'name' => $variationMeal->getMealName(),
                'description' => $variationMeal->getMealDescription(),
                'variationDescription' => $variationMeal->getDescription(),
                'restaurant' => $variationMeal->getRestaurantName(),
                'image' => $variationMeal->getImage(),
                'category' => $variationMeal->getCategoryName(),
                'price' => $variationMeal->getPrice()
            ];
        }

        return View::create($data, Response::HTTP_OK);

    }
}