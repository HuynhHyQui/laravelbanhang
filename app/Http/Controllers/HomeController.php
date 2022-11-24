<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','0')->take(3)->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')
        ->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','0')
        ->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')
        ->orderBy('product_id','desc')->limit(4)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)
        ->with('all_product',$all_product)->with('slider',$slider);
    }

    public function search(Request $request){
        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','0')->take(3)->get();
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')
        ->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','0')
        ->orderby('brand_id','desc')->get();
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)
        ->with('search_product',$search_product)->with('slider',$slider);
    }
}
