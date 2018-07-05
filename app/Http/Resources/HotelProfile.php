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
            'data' => [
                'hotel'      => [
                    'name'    => $this->name,
                    'id'      => $this->id,
                ],
                'rooms'      => $this->room,
                'restaurant' => $this->restaurant,
                'contacts'   => $this->contact,
            ],
        ];
    }
}
