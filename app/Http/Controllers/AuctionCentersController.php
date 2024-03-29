<?php

namespace App\Http\Controllers;

use App\Models\AuctionCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuctionCentersController extends Controller
{
    /**
     * Function creates a new auction center.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {

        $center = new AuctionCenter();
        $center->company = $request->value['company'];
        $center->location = $request->value['location'];
        $center->street = $request->value['street'];
        $center->house_nr = $request->value['house_nr'];
        $center->city = $request->value['city'];
        $center->postal_code = $request->value['postal_code'];
        $center->save();

        return $center;
    }

    /**
     * Function returns list of all auction centers.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function index() {
        return AuctionCenter::all();
    }

    /**
     * Function returns data of a selected auction center.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\AuctionCenter $center
     *
     * @return Illuminate\Http\Response
     */
    public function show(Request $request) {
        $center = AuctionCenter::where('id', $request->route('id'))->first();

        return $center;
    }
    
    /**
     * Function updates a given auction center.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function update() {

    }

    /**
     * Function deletes an auction center.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\AuctionCenter $center
     *
     * @return Illuminate\Http\Response
     */
    public function delete(Request $request) {
        $center = AuctionCenter::find($request->route('id'));
        $center->delete();

        return response('Group deleted', 200);
    }
}
