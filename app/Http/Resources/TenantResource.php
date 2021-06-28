<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TenantResource extends JsonResource
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
            'id' => $request->id,
            'agency' => new AgencyResource(\App\Agency::first($request->agency_id)),
            'user' => new UserResource(\App\User::first($request->user_id)),
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ];
    }
}
