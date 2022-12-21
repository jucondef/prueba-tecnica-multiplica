<?php
namespace App\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use App\Contracts\PaginationData;
use Illuminate\Pagination\LengthAwarePaginator;

class PageHelper implements PaginationData
{
    public function pagination(Collection $data):LengthAwarePaginator
    {
        $currentPage = request('page') ?: (Paginator::resolveCurrentPage() ?: 1);
        $perPage = 5;
        $items = $data->forPage($currentPage, $perPage);
        $totalResults = $data->count();

        return new LengthAwarePaginator(
            $items,
            $totalResults,
            $perPage,
            $currentPage,
            [
                'path' => url()->current(),
                'pageName' => 'page',
            ]
        );
    }
}
