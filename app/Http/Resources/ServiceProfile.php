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
                'type'        => $this->type,
                $this->type   => [
                    'name'  => $this->name,
                    'id'    => $this->id,
                    'notes' => $this->note,
                    'updateLink' => $this->update_link,
                    'deleteLink' => $this->delete_link,
                ],
                'rooms'       => $this->when($this->resource instanceof Hotel, $this->withLinks($this->room)),
                'restaurants' => $this->when($this->resource instanceof Hotel, $this->restaurant),
                'fares'       => $this->when($this->resource instanceof Transport, $this->withLinks($this->fare)),
                'dishes'      => $this->when($this->resource instanceof Restaurant, $this->withLinks($this->dish)),
                'contacts'    => $this->withLinks($this->contact),
            ],
        ];
    }

    public function withLinks($value) {
        if ($value !== null) {
            $value->each(function ( $item, $key ) {
                $item[ 'deleteLink' ] = $item->delete_link;
                $item[ 'updateLink' ] = $item->update_link;
                return ;
            });
        }
        return $value;
    }
}
