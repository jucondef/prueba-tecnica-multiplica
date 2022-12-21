<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"  => $this->id,
            "client_id"  => $this->client_id,
            "segmentation_id" => $this->segmentation_id,
            "transaction_type_id" => $this->transaction_type_id,
            "transaction_status_id" => $this->transaction_status_id,
            "transaction_currency_id" => $this->transaction_currency_id,
            "transaction_source_id" => $this->transaction_source_id,
            "year" => $this->year,
            "month" => $this->month,
            "amount" => $this->amount,
            "savings_expiration_date" => $this->savings_expiration_date,
            "transaction_detail" => $this->transaction_detail,
            "created_by" => $this->created_by,
            "updated_by" => $this->updated_by,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
