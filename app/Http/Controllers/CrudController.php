<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class CrudController extends Controller
{
    public function getOffers()
    {
       return Offer::get();    // To bring all data from Offer.php model
       return Offer::select('name','price')->get();    // To bring particular data from Offer.php model
    }




}
