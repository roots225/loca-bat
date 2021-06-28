<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

use App\Http\Resources\PropertyResource;

class PropertyController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PropertyResource::collection(Property::All());
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
    public function store(\App\Http\Requests\StorePropertyRequest $request)
    {
        $property = new Property();
        $property->fill($request->all());
        $property->save();

        return $this->successResponse(new PropertyResource($property));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Htt\UpdatePropertyRequest $request, Property $property)
    {
        $property->fill($request->all());
        $property->update();

        return $this->successResponse(new PropertyResource($property));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        return $this->deleteEntity($property);
    }
}
