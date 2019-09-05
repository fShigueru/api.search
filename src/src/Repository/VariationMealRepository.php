<?php

namespace App\Repository;

use App\Document\VariationMeal;
use Doctrine\ODM\MongoDB\DocumentRepository;

class VariationMealRepository extends DocumentRepository
{
    /**
     * @param VariationMeal $variationMeal
     */
    public function create(VariationMeal $variationMeal) : void
    {
        $this->dm->persist($variationMeal);
        $this->dm->flush();
    }

}