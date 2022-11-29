<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IngredientResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'measurement' => $this->whenPivotLoaded('ingredient_recipe', function(){
                return $this->pivot->measurement;
            }),
            'amount' => $this->whenPivotLoaded('ingredient_recipe', function(){
                return $this->pivot->amount;
            })
        ];
    }
}
