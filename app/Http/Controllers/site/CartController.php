<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Config;
use App\Models\SeoPage;

class CartController extends Controller
{
    public function getCart()
    {
       
        return view('site.cart.cart');
    }
}
