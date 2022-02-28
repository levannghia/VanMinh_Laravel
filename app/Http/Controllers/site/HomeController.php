<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\SeoPage;
use App\Models\Category;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
            $image = json_decode(json_encode([
                "mimeType" => "image/png",
                "width" => 110,
                "height" => 110,
            ]));
        $new_product = Products::where('status',1)->orderBy('id','DESC')->where('type',0)->limit(5)->get();
        $category = Category::where('status',1)->orderBy('id','DESC')->get();
        return view('site.home.index',compact('settings','image', 'category','new_product'));
    }
}
