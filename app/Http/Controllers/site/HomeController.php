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
use App\Models\Video;
use Illuminate\Support\Facades\Redirect;
use Cart;

class HomeController extends Controller
{
    public function saveCart(Request $request)
    {
        $id = $request->product_id;
        $quantiti = $request->quantiti;
        $product_detail = Products::where('id',$id)->first();

        $data['id'] = $product_detail->id;
        $data['qty'] = $quantiti;
        $data['name'] = $product_detail->name;
        $data['options']['image']= $product_detail->photo;
        if($product_detail->price != NULL){
            $data['price'] = $product_detail->price;
            $data['weight']= $product_detail->price;
        }else{
            $data['price'] = 0;
            $data['weight']= 0;
        }
        Cart::add($data);
        dd(Cart::content());
    }

    public function deleteCart($rowId) {
        Cart::update($rowId, 0);
        return Redirect::to('/cart');
    }

    public function updateCart(Request $request) {
        $id = $request->product_id;
        $product_detail = Products::where('id',$id)->first();
        $rowId = $request->cart_rowId;
        $qty = $request->cart_qty;

        
        Cart::update($rowId, $qty);
        return Redirect::to('/cart');   
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

        $slider = Photo::where('status',1)->where('type','slide')->orderBy('stt','ASC')->get();
        $video = Video::where('status',1)->where('noi_bac',1)->orderBy('id','DESC')->get();
        $category_lv1 = Category_LV1::where('categories_lv1.status', 1)->where('categories_lv1.noi_bac', 1)->orderBy('categories_lv1.stt', 'ASC')->limit(2)->get();
        $news = News::where('status', 1)->where('noi_bac', 1)->orderBy('id', 'DESC')->limit(2)->get();
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
        return view('site.home.index', compact('video','slider','category_lv1','settings', 'image', 'category', 'new_product', 'standard', 'news', 'nhaDat'));
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
                $p = '<p class="product-price">Giá: <a href="" class="contact-product">liên hệ</a> </p>';
            }else{
                $p = '<p class="product-price">Giá: <a href="/san-pham/'.$item->slug.'" class="contact-product">'.number_format($item->price, 0, ',', '.').' đ</a> </p>';
            }
            $output .= '
            <div class="col-md-3 col-6 img-flu">
                <div class="border-col">
                <div class="detail-product-link">
                    <a href="/san-pham/'.$item->slug.'"><img src="/upload/images/product/thumb/'.$item->photo.'" alt="">
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
        $data = Products::where("name", "like", '%' . $request->q . '%')->where('status',1)->orderBy('id', 'desc')->paginate(8);
        dd($data);
    }
}
