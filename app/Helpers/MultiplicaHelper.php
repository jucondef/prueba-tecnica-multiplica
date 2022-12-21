<?php

namespace App\Helpers;

use App\Traits\ApiResponser;
use App\Contracts\PaginationData;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class MultiplicaHelper
{
    private $page;

    public function __construct(PaginationData $page)
    {
        $this->page = $page;

    }

    public function getGeneralDataUsers(){
        $response = Http::get(config('multiplica.url_service').config('multiplica.token'));
        $response = collect(json_decode($response));
        return $response;
    }

    public function getDataUserApi(){
       $response = Http::get(config('multiplica.url_service').config('multiplica.token'));
       $response = collect(json_decode($response))->sortByDesc('created_at');
       return $this->page->pagination($response);
    }

    public function getTransactionUser($id_client){
        $response = Http::get(config('multiplica.url_service').config('multiplica.token') . '/transaction/' . $id_client);
        $response = collect(json_decode($response))->sortBy('created_at');
        return $this->page->pagination($response);
    }
}
