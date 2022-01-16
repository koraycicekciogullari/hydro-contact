<?php

namespace Koraycicekciogullari\HydroContact\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ContactCollection extends ResourceCollection
{

    /**
     * @param Request $request
     * @return ContactResource
     */
    public function toArray($request): ContactResource
    {
        return new ContactResource($this->collection);
    }
}
