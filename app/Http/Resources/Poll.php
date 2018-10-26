<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Poll extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'title' => $this->title,
            'created_at' => mb_strimwidth($this->created_at, 0, 16),
            'updated_at' => mb_strimwidth($this->updated_at, 0, 16),
        
        ];   
    }
}
