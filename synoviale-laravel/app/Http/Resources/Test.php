<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Test extends JsonResource
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
            'id' => $this->id,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
            'feedback' => $this->feedback,
            'active' => $this->active,
            'testDay_id' => $this->testDay,
            'edition_id' => $this->edition,
            'event_id' => $this->event,
            'product_id' => $this->product,
            'client_id' => $this->client
        ];
    }
}
