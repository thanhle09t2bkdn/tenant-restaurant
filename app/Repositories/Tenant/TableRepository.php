<?php


namespace App\Repositories\Tenant;


use App\Models\User;

class TableRepository extends BaseRepository
{
    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
        'id' => ['column' => 'tables.id', 'operator' => '='],
        'name' => ['column' => 'tables.name', 'operator' => 'like'],
        'description' => ['column' => 'tables.description', 'operator' => 'like'],
    ];


    public function __construct(User $model)
    {
        $this->model = $model;
    }

}
