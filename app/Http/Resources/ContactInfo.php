<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactInfo extends JsonResource
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
          'name' => $this->contact,
          'street' => $this->street,
          'city' => $this->city,
          'zip' => $this->zip,
          'country' => $this->country,
          'phone' => $this->phone,
          'email' => $this->email,
        ];
    }
}
