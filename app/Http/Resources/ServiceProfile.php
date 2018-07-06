<?php

namespace App\Http\Resources;

use App\Hotel;
use App\Restaurant;
use App\Transport;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceProfile extends JsonResource
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
                $this->type      => [
                    'name'    => $this->name,
                    'id'      => $this->id,
                    'notes' => $this->note,
                ],
                'rooms'      => $this->when($this->resource instanceof Hotel, $this->room),
                'restaurants' => $this->when($this->resource instanceof Hotel, $this->restaurant),
                'fares' => $this->when($this->resource instanceof Transport, $this->fare),
                'dishes' => $this->when($this->resource instanceof Restaurant, $this->dish),
                'contacts'   => $this->contact,
            ],
        ];
    }
}
