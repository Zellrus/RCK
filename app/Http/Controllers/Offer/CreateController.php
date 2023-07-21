<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\OfferRequets;
use App\Mail\OrderForAdminMail;
use App\Mail\OrderMail;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CreateController extends Controller
{
  public function __invoke(OfferRequets $requets)
  {
    $data = $requets->validated();
      $offer = Offer::create($data);
    Mail::to($data['email'])->send(new OrderMail($data['name']));
      $data = implode(',', $data);
    Mail::to(env("MAIL_ADMIN_ADDRESS"))->send(new OrderForAdminMail($data));
   //$offer = Offer::create($data);
   // return route('product.create');
    return $data;

  }
}
