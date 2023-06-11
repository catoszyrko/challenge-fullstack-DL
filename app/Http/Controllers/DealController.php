<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDealRequest;
use App\Http\Requests\UpdateDealRequest;
use App\Models\Deal;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "internalName" => "THEORANGEBOX",
            "title" => "The Orange Box",
            "metacriticLink" => "/game/pc/the-orange-box",
            "dealID" => "TZdIf%2BhNCxhdhp2S69CaIwYmzVwD2n3OR%2BiLDGnURRo%3D",
            "storeID" => "1",
            "gameID" => "94081",
            "salePrice" => "3.99",
            "normalPrice" => "19.99",
            "isOnSale" => "1",
            "savings" => "80.040020",
            "metacriticScore" => "96",
            "steamRatingText" => "Very Positive",
            "steamRatingPercent" => "94",
            "steamRatingCount" => "990909",
            "steamAppID" => "469",
            "releaseDate" => 1191974400,
            "lastChange" => 1625001348,
            "dealRating" => "9.3",
            "thumb" => "https =>//cdn.cloudflare.steamstatic.com/steam/subs/469/capsule_sm_120.jpg?t=1577609887"
        ];
        return $data;
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
     * @param  \App\Http\Requests\StoreDealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDealRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDealRequest  $request
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDealRequest $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        //
    }
}
