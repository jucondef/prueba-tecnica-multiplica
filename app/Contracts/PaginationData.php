<?php

namespace App\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface PaginationData {

    public function pagination(Collection $collection):LengthAwarePaginator;

}
