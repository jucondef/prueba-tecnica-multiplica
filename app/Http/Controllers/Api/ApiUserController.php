<?php

namespace App\Http\Controllers\Api;

use App\Helpers\MultiplicaHelper;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionsResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiUserController extends ApiController
{
     /**
    * @OA\Get(
    *     path="/api/user/{id}",
    *     operationId="getInformationUser",
    *     tags={"User"},
    *     summary="Show data user",
    *     @OA\Parameter(
    *          name="id",
    *          description="Id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer"
    *          )
    *      ),
    *     @OA\Response(
    *         response=200,
    *         description="Successful operation"
    *     ),
    *     @OA\Response(
    *         response="400",
    *         description="Bad request"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Server error."
    *     )
    * )
    */
    private MultiplicaHelper $user;

    public function __construct(MultiplicaHelper $user)
    {
        $this->user = $user;
    }

    public function index($id)
    {
        $informationUser =  $this->user->getGeneralDataUsers()->firstWhere('user_id',$id);
        $transactions = TransactionsResource::collection($this->user->getTransactionUser($id)->items());
        $informationUser->transactions = $transactions;
        Log::info("Get data user ". json_encode($informationUser));
        return $this->successResponse($informationUser, "User info obtained successfully", 200);
    }
}
