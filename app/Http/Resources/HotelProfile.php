<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelProfile extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray( $request )
    {
        return [
            'service'    => [
                'name' => $this->name,
                'id'   => $this->id,
            ],
            'vendors'    => $this->service->vendor,
            'rooms'      => $this->room,
            'restaurant' => $this->restaurant,
        ];
    }
}