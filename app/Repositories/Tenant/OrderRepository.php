<?php


namespace App\Repositories\Tenant;


use App\Models\User;

class OrderRepository extends BaseRepository
{
    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
        'id' => ['column' => 'orders.id', 'operator' => '='],
        'order_code' => ['column' => 'orders.order_code', 'operator' => '='],
        'user_id' => ['column' => 'orders.user_id', 'operator' => '='],
        'table_id' => ['column' => 'orders.table_id', 'operator' => '='],
    ];


    public function __construct(User $model)
    {
        $this->model = $model;
    }

}
