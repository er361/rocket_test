<?php

namespace App\Http\Controllers\API;

use App\Advert;
use App\Http\Resources\AdverResource;
use App\Http\Resources\AdvertCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/advert/{id}",
     *     @OA\Parameter(
     *      name="id",
     *      description="advert id",
     *      in="path",
     *     ),
     *     @OA\Schema(type="integer"),
     *     @OA\Response(response="200", description="An example resource"),
     *     security = {{"token" : {}}}
     * )
     */
    public function show(Advert $advert)
    {
        //
        return new AdverResource($advert);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
