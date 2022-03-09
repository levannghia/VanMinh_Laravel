<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\SeoPage;
use App\Models\Category;
use App\Models\Category_LV1;
use App\Models\Products;
use App\Models\Standard;
use App\Models\News;
use App\Models\Photo;
use App\Models\Review;
use App\Models\Video;
use File;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Cart;

class HomeController extends Controller
{
    public function siteMap()
    {
        $sitemap = App::make('sitemap');
        // add home pages mặc định
        $sitemap->add(URL::to('/'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/lien-he'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/san-pham'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/mua-ban-nha-dat'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/tin-tuc'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/gioi-thieu'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/video'), Carbon::now(), 1, 'daily');
        $sitemap->add(URL::to('/cart'), Carbon::now(), 1, 'daily');
        // add san pham
        $products = DB::table('products')->where('type', 0)->orderBy('created_at', 'desc')->get();
        foreach ($products as $item) {
            //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
            $sitemap->add(route('get.product.slug', $item->slug), $item->updated_at, 1, 'daily');
        }
        // add nha dat
        $nhaDat = DB::table('products')->where('type', 1)->orderBy('created_at', 'desc')->get();
        foreach ($nhaDat as $item) {
            //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
            $sitemap->add(route('get.nha.dat.slug', $item->slug), $item->updated_at, 1, 'daily');
        }
        // add tin tuc
        $news = DB::table('news')->orderBy('created_at', 'desc')->get();
        foreach ($news as $item) {
            //$sitemap->add(url, thời gian, độ ưu tiên, thời gian quay lại)
            $sitemap->add(route('get.news.slug', $item->slug), $item->updated_at, 2, 'daily');
        }

        // lưu file và phân quyền
        $sitemap->store('xml', 'sitemap');
        if (File::exists(public_path('sitemap.xml'))) {
            chmod(public_path('sitemap.xml'), 0777);
        }
        return $sitemap->render('xml');
    }
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

        $review = Review::where('status',1)->where('noi_bac',1)->get();
        $slider = Photo::where('status',1)->where('type','slide')->orderBy('stt','ASC')->get();
        $video = Video::where('status',1)->where('noi_bac',1)->orderBy('id','DESC')->limit(3)->get();
        $category_lv1 = Category_LV1::where('categories_lv1.status', 1)->where('categories_lv1.noi_bac', 1)->orderBy('categories_lv1.stt', 'ASC')->limit(2)->get();
        $news = News::where('status', 1)->where('noi_bac', 1)->orderBy('id', 'DESC')->get();
        $standard = Standard::where('status', 1)->orderBy('stt', 'ASC')->get();
        $new_product = Products::where('status', 1)->orderBy('id', 'DESC')->where('type', 0)->limit(5)->get();
        $category = Category::where('status', 1)->orderBy('stt', 'ASC')->get();
        $category_noibac = Category::select('categories.name','categories.id','categories.slug')
        ->join('categories_lv1','categories_lv1.id','=','categories.category_lv1_id')->where('categories.noi_bac', 1)->where('categories.status',1)->orderBy('categories.stt', 'ASC')->get();
        // dd($category_noibac);
        $nhaDat = Products::where('status', 1)->where('noi_bac', 1)->orderBy('id', 'DESC')->where('type', 1)->limit(8)->get();
        // $cate_product = Products::select('products.id','products.name','products.price','products.view','products.photo','categories.name AS category_name')
        // ->join('categories', 'categories.id','=','products.category_id')
        // ->where('categories.id',$category_noibac[0]['id'])->where('products.type',0)->where('products.status',1)->orderBy('categories.stt', 'ASC')->paginate($settings['PHAN_TRANG_PRODUCT']);
        return view('site.home.index', compact('review','video','slider','category_lv1','settings', 'image', 'category', 'new_product', 'standard', 'news', 'nhaDat'));
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

    public function getProductByCategory(Request $request){
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $output = "";
        $p ="";
        $cate_product = Products::select('products.id','products.name','products.price','products.view','products.slug','products.photo','categories.name AS category_name')
        ->join('categories', 'categories.id','=','products.category_id')
        ->where('categories.id',$request->id)->where('products.type',0)->where('products.noi_bac',1)->where('products.status',1)->orderBy('stt', 'ASC')->paginate($settings['PHAN_TRANG_PRODUCT']);
        $output .= '<div class="row">';
        foreach ($cate_product as $key => $item) {
            if($item->price == NULL){
                $p = '<p class="product-price">Giá: <a href="" class="contact-product">Liên hệ</a> </p>';
            }else{
                $p = '<p class="product-price">Giá: <a href="/san-pham/'.$item->slug.'" class="contact-product">'.number_format($item->price, 0, ',', '.').' đ</a> </p>';
            }
            $output .= '
            <div class="col-md-3 col-6 img-flu">
                <div class="border-col">
                <div class="detail-product-link">
                    <a href="/san-pham/'.$item->slug.'"><img src="public/upload/images/product/thumb/'.$item->photo.'" alt="">
                    </a>
                    </div>
                    <a href="/san-pham/'.$item->slug.'"><h6 class="product-name">'.$item->name.'</h6></a>
                    
                    <div class="price-view">
                        '.$p.'
                        <p class="product-views">Lượt xem: '.$item->view.'</p>
                    </div>
                </div>
        </div>';
        }
        $output .= "</div>";
        // <nav aria-label="Page navigation " class="pagination-product">
        //         <ul class="pagination">
        //             <li class="page-item">
        //                 <a class="page-link" href="#" aria-label="Previous">
        //                     <span aria-hidden="true">&laquo;</span>
        //                     <span class="sr-only">Previous</span>
        //                 </a>
        //             </li>
        //             <li class="page-item"><a class="page-link" href="#">1</a></li>
        //             <li class="page-item"><a class="page-link" href="#">2</a></li>
        //             <li class="page-item"><a class="page-link" href="#">3</a></li>
        //             <li class="page-item">
        //                 <a class="page-link" href="#" aria-label="Next">
        //                     <span aria-hidden="true">&raquo;</span>
        //                     <span class="sr-only">Next</span>
        //                 </a>
        //             </li>
        //         </ul>
        //     </nav>
        echo $output;
    }

    public function Search(Request $request)
    {
        $search = $request->q;
        $data = Products::where("name", "like", '%' . $request->q . '%')->where('status',1)->where('type',0)->orderBy('id', 'desc')->paginate(8);
        $settings = Config::all(['name', 'value'])
            ->keyBy('name')
            ->transform(function ($setting) {
                return $setting->value; // return only the value
            })
            ->toArray();
        $seoPage = SeoPage::where('type', 'san-pham')->first();
          
        return view('site.product.search', compact('data', 'seoPage', 'settings','search'));

    }
}
