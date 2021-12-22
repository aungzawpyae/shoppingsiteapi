<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id'=>$this->id,
            'name'=>$this->name,
            'product_id'=>$this->product_id,
            'active'=>$this->active,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,

        ];

        return $data;
    }
}
