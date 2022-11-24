<?php

namespace App\Http\Controllers;


use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    public function AuthLogin(){
        $admin_id = session()->get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function manage_banner(){
        $this->AuthLogin();
        $all_slide = Slider::orderby('slider_id','DESC')->get();
        return view('admin.slider.list_slide')->with(compact('all_slide'));
    }

    public function add_banner(){
        $this->AuthLogin();
        return view('admin.slider.add_slide');
    }

    public function save_banner(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $get_image = $request->file('slider_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider',$new_image);
            
            $slider = new Slider();
            $slider->slider_name = $data['slider_name'];
            $slider->slider_image = $new_image;
            $slider->slider_status = $data['slider_status'];
            $slider->slider_desc = $data['slider_desc'];
            $slider->save();
            return Redirect::to('manage-banner');
        }
    }

    public function unactive_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slide_id)->update(['slider_status'=>1]);
        return Redirect::to('manage-banner');
    }

    public function active_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slide_id)->update(['slider_status'=>0]);
        return Redirect::to('manage-banner');
    }

    public function delete_slide($slide_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slide_id)->delete();
        return Redirect::to('manage-banner');
    }
}
