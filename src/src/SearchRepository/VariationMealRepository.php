<?php


namespace App\SearchRepository;

use Elastica\Query;
use Elastica\Query\BoolQuery;
use FOS\ElasticaBundle\Repository;

class VariationMealRepository extends Repository
{
    /**
     * @param null $search
     * @param null $price
     * @param int $limit
     * @return array
     */
    public function search($search = null, $price = null, $category = null, $limit = 10)
    {
        $bool = new BoolQuery();
        if (!empty($price)) {
            $multiMatch = new Query\MultiMatch();
            $multiMatch->setQuery($price);
            $multiMatch->setFields(["price"]);
            $bool->addMust($multiMatch);
        }
        if (!empty($search)) {
            $matchPrefix = new Query\MatchPhrasePrefix();
            $matchPrefix->setField('mealName', $search);
            $bool->addMust($matchPrefix);
        }

        if (!empty($category)) {
            $matchPrefixCate = new Query\MatchPhrasePrefix();
            $matchPrefixCate->setField('categoryName', $category);
            $bool->addMust($matchPrefixCate);
        }

        $query = new Query($bool);
        $query->setSize($limit);

        return $this->find($query);
    }
}