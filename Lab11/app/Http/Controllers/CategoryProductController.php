<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use App\Http\Requests;

class CategoryProductController extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');
    }
    public function list_category_product(){
        $this->AuthLogin();
        $list_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.list_category_product')->with('list_category_product',$list_category_product);
        return view('admin_layout.admin_layout')->with('admin.list_category_product', $manager_category_product);
    }
    public function insert_category_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin/dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
}
