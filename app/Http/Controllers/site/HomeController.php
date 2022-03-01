<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\SeoPage;
use App\Models\Category;
use App\Models\Products;
use App\Models\Standard;
use App\Models\News;

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

        $news = News::where('status', 1)->where('noi_bac', 1)->orderBy('id', 'DESC')->limit(2)->get();
        $standard = Standard::where('status', 1)->orderBy('stt', 'ASC')->get();
        $new_product = Products::where('status', 1)->orderBy('id', 'DESC')->where('type', 0)->limit(5)->get();
        $category = Category::where('status', 1)->orderBy('id', 'DESC')->get();
        $nhaDat = Products::where('status', 1)->where('noi_bac', 1)->orderBy('id', 'DESC')->where('type', 1)->limit(8)->get();
        return view('site.home.index', compact('settings', 'image', 'category', 'new_product', 'standard', 'news', 'nhaDat'));
    }

    public function showMap(Request $request)
    {
        $nhaDat = Products::where('status', 1)->where('noi_bac', 1)->where('id', $request->id)->where('type', 1)->first();

        if (isset($nhaDat)) {
            return response()->json([
                'status' => true,
                'data' => $nhaDat,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' => 'get failed',
            ]);
        }
    }
}
