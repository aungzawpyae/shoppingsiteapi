<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        $data = [
            'id'=>$this->id,
            'name'=>$this->name,
            'details'=>$this->details,
            'price'=>$this->price,
            'image'=>$this->image ? url('storage/'.$this->image):null,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,

        ];

        return $data;
    }
}
