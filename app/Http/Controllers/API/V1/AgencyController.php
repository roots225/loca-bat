<?php

namespace App\Http\Controllers\API\V1;

use App\Agency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AgencyResource;

class AgencyController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AgencyResource::collection(Agency::All());
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
    public function store(\App\Http\Requests\StoreAgencyRequest $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();

        return $this->successResponse(new AgencyResource($agency));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        return new AgencyResource($agency);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(Agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdateAgencyRequest $request, Agency $agency)
    {
        $agency->fill($request->all());
        $agency->update();

        return $this->successResponse(new AgencyResource($agency));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency)
    {
        return $this->deleteEntity($agency);
    }
}
