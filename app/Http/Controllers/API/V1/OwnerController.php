<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Owner;
use Illuminate\Http\Request;

use App\Http\Resources\OwnerResource;

class OwnerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OwnerResource::collection(Owner::All());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\StoreOwnerRequest $request)
    {
        $owner = new Owner();
        $owner->fill($request);
        $owner->save();

        return $this->successResponse(new OwnerResource($owner));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\UpdateOwnerRequest $request, Owner $owner)
    {
        $owner->fill($request);
        $owner->update();

        return $this->successResponse(new OwnerResource($owner));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        return $this->deleteEntity($owner);
    }
}
