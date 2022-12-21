<?php

namespace App\Http\Controllers;

use App\Helpers\MultiplicaHelper;
use DataTables;

class UserController extends Controller
{
    private MultiplicaHelper $user;

    public function __construct(MultiplicaHelper $user)
    {
        $this->user = $user;
    }

    public function getInformationUser(){
        try {
            $response = $this->user->getDataUserApi();
            return view('user_information', ['data' => $response]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function getTransactionsUser($id_client){
        $response = $this->user->getTransactionUser($id_client);
        return view('user_transactions', ['transactions' => $response]);
    }
}
