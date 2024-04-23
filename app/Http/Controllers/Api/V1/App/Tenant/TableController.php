<?php


namespace App\Http\Controllers\Api\V1\App\Tenant;


use App\Http\Controllers\Api\ApiController;
use App\Repositories\Tenant\TableRepository;
use Illuminate\Http\Request;

class TableController extends ApiController
{
    protected $tableRepository;
    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepository = $tableRepository;
    }

    public function index(Request $request)
    {
        dd($request->headers);
        $list = $this->tableRepository->searchFromRequest($request);
        return $this->successResponse($list);
    }
}
