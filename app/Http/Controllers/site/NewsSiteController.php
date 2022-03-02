<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Config;

class NewsSiteController extends Controller
{
    public function getNewsBySlug($slug)
    {
        $news = DB::table('news')->where('status',1)->where('slug',$slug)->first();
        dd($news);
    }

    public function getAllNews()
    {
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $news = DB::table('news')->where('status',1)->paginate($settings['PHAN_TRANG_BAI_VIET']);
        dd($news);
    }
}
