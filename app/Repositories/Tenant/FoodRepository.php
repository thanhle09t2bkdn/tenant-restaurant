<?php


namespace App\Repositories\Tenant;


use App\Models\Tenant\Food;
use App\Models\User;

class FoodRepository extends BaseRepository
{
    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
        'id' => ['column' => 'foods.id', 'operator' => '='],
        'name' => ['column' => 'foods.name', 'operator' => 'like'],
        'description' => ['column' => 'foods.description', 'operator' => 'like'],
        'price' => ['column' => 'foods.price', 'operator' => '='],
    ];


    public function __construct(Food $model)
    {
        $this->model = $model;
    }

}
