<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
          'data' => [
              'age' => $this->age,
              'status' => $this->status,
              'gender' => $this->gender,
              'nationality' => $this->nationality,
              'update_link' => $this->update_link,
              'delete_link' => $this->delete_link
          ]
        ];
    }
}
