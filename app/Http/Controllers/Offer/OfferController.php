<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __invoke()
    {
        $offers = Offer::all();

        return view('admin.order.index', compact('offers'));
    }
}
