<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers.index');
    }
}
