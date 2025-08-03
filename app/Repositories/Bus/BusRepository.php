<?php

namespace App\Repositories\Bus;

use App\Models\Bus;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Enum\BusStatus;

/**
 * The repository for Bus Model
 */
class BusRepository extends BaseRepository implements BusRepositoryInterface
{
    public function __construct(Bus $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    
}