<?php

namespace App\Http\Controllers;

use App\Models\AuctionCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuctionCentersController extends Controller
{
    //
    public function auctionCenterAdd(Request $request) {

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

    public function auctionCenterIndex(Request $request) {
        $auction_centers = DB::table('auction_centers')->distinct()->get();
        return $auction_centers;
    }

    public function auctionCenterShow() {
        $centers = [
            "foo" => [
                "foo" => "bar"
            ],
            "bar" => [
                "bar" => "foo"
            ],
        ];

        return $centers;
    }

    public function auctionCenterDelete() {
        $centers = [
            "foo" => [
                "foo" => "bar"
            ],
            "bar" => [
                "bar" => "foo"
            ],
        ];

        return $centers;
    }
}
