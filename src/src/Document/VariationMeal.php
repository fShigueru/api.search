<?php


namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="variationMeal", repositoryClass="App\Repository\VariationMealRepository")
 */
class VariationMeal
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $variationId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $price;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $mealId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $mealName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $mealDescription;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $image;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $position;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $slug;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $categoryName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $categorySlug;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $status;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $restaurantId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $restaurantName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $restaurantSlug;

    /**
     * @MongoDB\Field(type="integer")
     */
    protected $score;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $street;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $number;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $neighborhood;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $cep;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $location;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $city;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $uf;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return VariationMeal
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariationId()
    {
        return $this->variationId;
    }

    /**
     * @param mixed $variationId
     * @return VariationMeal
     */
    public function setVariationId($variationId)
    {
        $this->variationId = $variationId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return VariationMeal
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return VariationMeal
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return VariationMeal
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMealId()
    {
        return $this->mealId;
    }

    /**
     * @param mixed $mealId
     * @return VariationMeal
     */
    public function setMealId($mealId)
    {
        $this->mealId = $mealId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMealName()
    {
        return $this->mealName;
    }

    /**
     * @param mixed $mealName
     * @return VariationMeal
     */
    public function setMealName($mealName)
    {
        $this->mealName = $mealName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMealDescription()
    {
        return $this->mealDescription;
    }

    /**
     * @param mixed $mealDescription
     * @return VariationMeal
     */
    public function setMealDescription($mealDescription)
    {
        $this->mealDescription = $mealDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return VariationMeal
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     * @return VariationMeal
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return VariationMeal
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     * @return VariationMeal
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorySlug()
    {
        return $this->categorySlug;
    }

    /**
     * @param mixed $categorySlug
     * @return VariationMeal
     */
    public function setCategorySlug($categorySlug)
    {
        $this->categorySlug = $categorySlug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return VariationMeal
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestaurantId()
    {
        return $this->restaurantId;
    }

    /**
     * @param mixed $restaurantId
     * @return VariationMeal
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurantId = $restaurantId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * @param mixed $restaurantName
     * @return VariationMeal
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestaurantSlug()
    {
        return $this->restaurantSlug;
    }

    /**
     * @param mixed $restaurantSlug
     * @return VariationMeal
     */
    public function setRestaurantSlug($restaurantSlug)
    {
        $this->restaurantSlug = $restaurantSlug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     * @return VariationMeal
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return VariationMeal
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return VariationMeal
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param mixed $neighborhood
     * @return VariationMeal
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     * @return VariationMeal
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     * @return VariationMeal
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return VariationMeal
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     * @return VariationMeal
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }



}