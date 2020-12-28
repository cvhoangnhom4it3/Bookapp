<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class Slidecontroller extends Controller
{
    public function view_slide(){
       	
       	$slide = Slide::paginate(12);
       	// printf($danhmuc);
       	// exit();
        return view('PagesAdmin.view_slides',compact('slide'));

    }
    public function get_insert_slide(Request $request){

        return view('PagesAdmin.insert_slide');
    }
    public function post_insert_slide(Request $request){
        $this->validate($request,
        [
            'tensl'=>'required',
            'avatar'=>'required'
        ],
        [
            'tensl.required'=>'Bạn chưa nhập tên slide',
            'avatar.required'=>'Bạn chưa chọn ảnh'
        ]);
        $slide = new Slide;
        $slide->Tenslide = $request->tensl;
        $slide->Mota = $request->motasl;

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg"){
                return redirect('Admin/insert_slide')->with('loi','Không thể nhập file trên , Bạn chỉ được chọn ảnh - Thêm không thành công ?');
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4)."_".$name;
            while (file_exists("assets/images/slide/".$avatar)) {
                $avatar = str_random(4)."_".$name;
            }
            $file->move("assets/images/slide",$avatar);
            $slide->Url = "assets/images/slide".$avatar;
        }
        else{
            $slide->Url = "";
        }
        $slide->save();
        
      return redirect('Admin/insert_slide')->with('thongbao','Thêm thành công');
    }
    public function edit_slide($id ,Request $request){
       	
       	$slide = Slide::find($id);
       	// printf($danhmuc);
       	// exit();
        return view('PagesAdmin.edit_slide',compact('slide'));

    }
    public function post_edit_slide(Request $request,$id){
        $this->validate($request,
        [
            'tensl'=>'required'
            
        ],
        [
            'tensl.required'=>'Bạn chưa nhập tên sldie'
        ]);

        $slide = Slide::find($id);
        $slide->Tenslide = $request->tensl;
        $slide->Mota = $request->motasl;

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg"){
                return redirect('Admin/insert_slide')->with('loi','Không thể nhập file trên , Bạn chỉ được chọn ảnh - Thêm không thành công ?');
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4)."_".$name;
            while (file_exists("assets/images/slide/".$avatar)) {
                $avatar = str_random(4)."_".$name;
            }
            $file->move("assets/images/slide",$avatar);
            if($slide->Url){
                unlink($slide->Url);
            }
            $slide->Url = "assets/images/slide".$avatar;
        }
        $slide->save();

      	return redirect('Admin/view_slides')->with('thongbao','Cập nhật thành công');
        // return redirect('Admin/edit_p_category/'.$id)->with('thongbao','Cập nhật thành công');
    }
    public function delete_slide($id){
        Slide::find($id)->delete();
        return redirect('Admin/view_slides')->with('thongbao','Xóa thành công');
    }
}
