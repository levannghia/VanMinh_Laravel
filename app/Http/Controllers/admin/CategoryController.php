<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row = json_decode(json_encode([
            "title" => "Categories",
            "desc" => "Danh mục sản phẩm"
        ]));
        $category = Category::orderBy('id','DESC')->paginate(15);
        return view('admin.category.index',compact('category','row'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row = json_decode(json_encode([
            "title" => "Create categories",
            "desc" => "Thêm danh mục"
        ]));
        return view('admin.category.add', compact('row'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:categories,name|max:40',
            'slug' => 'required|unique:categories,slug|max:255',
            'status' => 'required'
        ],[
                "name.required" => "Vui lòng nhập tên danh mục",
                "name.unique" => "Danh mục đã tồn tại",
                "name.max" => "Tên danh mục không quá 40 ký tự",
                "slug.required" => "Vui lòng nhập slug",
                "slug.unique" => "Slug đã tồn tại",
                "slug.max" => "Slug không quá 255 ký tự",
                "status.required" => "Vui lòng chọn trạng thái"
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->description = $request->description;
        $category->keywords = $request->keywords;
        $category->slug = $request->slug;
        $category->noi_bac = 0;
        
        if($category->save()){
            return redirect()->back()->with(["type"=>"success","message"=>"Thêm danh mục thành công"]);
        }else{
            return back()->withInput()->with(["type"=>"danger","message"=>"Thêm danh mục thất bại"]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $category = Category::find($id);
        $row = json_decode(json_encode([
            "title" => "Update category",
            "desc" => "Cập nhật - " . $category->name
        ]));
        return view('admin.category.edit', compact('category','row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $this->validate($request, [
            'name' => 'required|unique:categories,name,'.$category->id.'|max:40',
            'slug' => 'required|unique:categories,slug,'.$category->id.'|max:255',
            'status' => 'required'
        ],[
                "name.required" => "Vui lòng nhập tên danh mục",
                "name.unique" => "Danh mục đã tồn tại",
                "name.max" => "Tên danh mục không quá 40 ký tự",
                "slug.required" => "Vui lòng nhập slug",
                "slug.unique" => "Slug đã tồn tại",
                "slug.max" => "Slug không quá 255 ký tự",
                "status.required" => "Vui lòng chọn trạng thái"
        ]);

        $category->keywords = $request->keywords;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->description = $request->description;
        $category->slug = $request->slug;
        
        if($category->save()){
            return redirect()->back()->with(["type"=>"success","message"=>"Cập nhật danh mục thành công"]);
        }else{
            return back()->withInput()->with(["type"=>"danger","message"=>"Cập nhật danh mục thất bại"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->delete()){
            return response()->json([
                'status' => 1,
                'msg' => 'Xóa danh mục thành công'
            ]);
        }else{
            return response()->json([
                'status' => 0,
                'msg' => 'Xóa danh mục thất bại'
            ]);
        }
    }

    public function noiBac($id,$noiBac)
    {
        $category = Category::find($id);
        $category->noi_bac = $noiBac;
        if ($category->save()) {
            return response()->json([
                "status" => 1,
                "msg" => "cập nhật thành công"
            ]);
        } else {
            return response()->json([
                "status" => 0,
                "msg" => "cập nhật thất bại"
            ]);
        }
    }

    public function status($id,$status)
    {
        $category = Category::find($id);
        $category->status = $status;
        if ($category->save()) {
            return response()->json([
                "status" => 1,
                "msg" => "cập nhật thành công"
            ]);
        } else {
            return response()->json([
                "status" => 0,
                "msg" => "cập nhật thất bại"
            ]);
        }
    }

    public function deleteAll($id = "") {
        $list_id = json_decode($id);
        //var_dump($list_id);
        //die();
        if (!isset($list_id[0]->id)) {
            return back()->withInput()->with(["type" => "danger", "message" => "Không có dữ liệu để xóa."]);
        }
        if (count($list_id) == 1 && isset($list_id[0]->id)) {
            $category = Category::find($list_id[0]->id);
            if ($category->delete()) {
                return redirect()->route("admin.category.index")->with(["type" => "success", "message" => "Xoá thành công!"]);
            } else {
                return back()->withInput()->with(["type" => "danger", "message" => "Đã xảy ra lỗi, vui lòng thử lại."]);
            }
        } else {
            foreach ($list_id as $key => $value) {
                $category = Category::find($value->id);
                
                $category->delete();
            }
            return redirect()->route("admin.category.index")->with(["type" => "success", "message" => "Xóa thành công!"]);
        }
    }
}
