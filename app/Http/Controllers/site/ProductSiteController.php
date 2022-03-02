<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Config;
use App\Models\Products;
use App\Models\SeoPage;

class ProductSiteController extends Controller
{
    public function getProductBySlug($slug)
    {
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $seoPage = SeoPage::where('type', 'san-pham')->first();
        $product = Products::where('type', 0)->where('status', 1)->where('slug', $slug)->first();
        if (isset($product)) {
            // đếm lượt xem
            $view = $product->view + 1;
            $product->view = $view;
            $product->save();

            $gallery = DB::table('galleries')->select('galleries.photo')
                ->join('products', 'products.id', '=', 'galleries.product_id')->where('galleries.status', 1)->where('products.id', $product->id)
                ->orderBy('galleries.stt', 'ASC')->get();
            //sp lien quan
            $product_cate = Products::select('products.photo', 'products.name', 'products.price', 'products.slug')
                ->join('categories', 'categories.id', '=', 'products.category_id')->where('products.type', 0)->where('products.status', 1)->limit(3)->get();

            return view('site.product.product_detail', compact('product', 'gallery', 'seoPage', 'settings', 'product_cate'));
        }
        return abort(404);
    }

    public function getAllProduct()
    {
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $product = DB::table('products')->where('type', 0)->where('status', 1)->paginate($settings['PHAN_TRANG_PRODUCT']);
        dd($product);
    }
    public function getNhaDatBySlug($slug)
    {
        $product = DB::table('products')->where('type', 1)->where('status', 1)->where('slug', $slug)->first();
        $gallery = DB::table('galleries')->select('galleries.photo')
            ->join('products', 'products.id', '=', 'galleries.product_id')->where('galleries.status', 1)->where('products.id', $product->id)
            ->orderBy('galleries.stt', 'ASC')->get();
        dd($gallery);
    }

    public function getAllNhaDat()
    {
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $product = DB::table('products')->where('type', 1)->where('status', 1)->paginate($settings['PHAN_TRANG_PRODUCT']);
        dd($product);
    }
}
