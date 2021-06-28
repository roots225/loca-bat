<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'type' => $request->type,
            'description' => $request->description,
            'owner' => new OwnerResource(Owner::first($request->owner_id)),
            'tenant' => new TenantResource(Tenant::first($request->tenant_id)),
            'pricePerMonth' => $request->pricePerMonth,
            'rent_deposit' => $request->rent_deposit,
            'rent_advance' => $request->rent_advance,
            'address' => $request->address,
            'photo' => $request->photo,
        ];
    }
}
