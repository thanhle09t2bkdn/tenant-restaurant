<?php


namespace App\Repositories\Tenant;


use App\Models\Tenant\Table;
use App\Repositories\BaseRepository;

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


    public function __construct(Table $model)
    {
        $this->model = $model;
    }

}
