<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Danhmuc;
use App\Theloai;
use App\Slide;
// use App\changeTitle;

class productcontroller extends changeTitle
{
    // public function view_product(){
       	
    //    	$slide = Slide::paginate(12);
    //    	// printf($danhmuc);
    //    	// exit();
    //     return view('PagesAdmin.view_product',compact('slide'));

    // }
    public function get_insert_product(Request $request){

    	$danhmuc = Danhmuc::all();
    	$theloai = Theloai::all();

        return view('PagesAdmin.insert_product',compact('danhmuc','theloai'));
    }
    public function post_insert_product(Request $request){
        $this->validate($request,
        [
            'tensanpham'=>'required',
            'avatar'=>'required',
            'giasanpham'=>'required',
            
        ],
        [
            'tensl.required'=>'Bạn chưa nhập tên slide',
            'avatar.required'=>'Bạn chưa chọn ảnh',
            'giasanpham.required'=>'Bạn chưa nhập giá sản phẩm',
            
        ]);
        $product = new Product;
        $product->Mahang = $request->mahang;
        $product->Tensanpham = $request->tensanpham;
        $product->Nhacungcap = $request->nhacungcap;
        $product->Nhaxuatban = $request->nhaxuatban;
        $product->Tacgia = $request->tacgia;
        $product->Hinhthucbia = $request->hinhthucbia;
        $product->Namxb = $request->namxuatban;
        $product->Trongluong = $request->trongluong;
        $product->Kichthuocbaobi = $request->ktbaobi;
        $product->Sotrang = $request->sotrang;
        $product->Motasanpham = $request->mota;
        $product->Giagoc = $request->giasanpham;
        $product->Phantramkm = $request->phantramkm;

        if(isset($request->nhansanpham)){
        	$product->New = $request->nhansanpham;
        }
        else{
        	$product->New = 0;
        }
        $product->Tenkhongdau = $this->changeTitle($request->tensanpham);
        if (isset($request->phantramkm)) {
        	$product->Giakm = ($request->giasanpham - ($request->giasanpham*($request->phantramkm / 100)));
        }
        else{
        	$product->Giakm = 0;
        }
        
        $product->ID_TL = $request->theloai;

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg"){
                return redirect('Admin/insert_slide')->with('loi','Không thể nhập file trên , Bạn chỉ được chọn ảnh - Thêm không thành công ?');
            }
            $name = $file->getClientOriginalName();
            $avatar = str_random(4)."_".$name;
            while (file_exists("assets/images/product/".$avatar)) {
                $avatar = str_random(4)."_".$name;
            }
            $file->move("assets/images/product",$avatar);
            $product->Url = "assets/images/product/".$avatar;
        }
        else{
            $product->Url = "";
        }
        $product->save();
        
      return redirect('Admin/insert_product')->with('thongbao','Thêm thành công');
    }
    // public function edit_product($id ,Request $request){
       	
    //    	$slide = Slide::find($id);
    //    	// printf($danhmuc);
    //    	// exit();
    //     return view('PagesAdmin.edit_product',compact('slide'));

    // }
    // public function post_edit_product(Request $request,$id){
    //     $this->validate($request,
    //     [
    //         'tensl'=>'required'
            
    //     ],
    //     [
    //         'tensl.required'=>'Bạn chưa nhập tên sldie'
    //     ]);

    //     $slide = Slide::find($id);
    //     $slide->Tenslide = $request->tensl;
    //     $slide->Mota = $request->motasl;

    //     if($request->hasFile('avatar')){
    //         $file = $request->file('avatar');
    //         $duoi = $file->getClientOriginalExtension();
    //         if($duoi != "jpg" && $duoi != "png" && $duoi != "jpeg"){
    //             return redirect('Admin/insert_slide')->with('loi','Không thể nhập file trên , Bạn chỉ được chọn ảnh - Thêm không thành công ?');
    //         }
    //         $name = $file->getClientOriginalName();
    //         $avatar = str_random(4)."_".$name;
    //         while (file_exists("assets/images/slide/".$avatar)) {
    //             $avatar = str_random(4)."_".$name;
    //         }
    //         $file->move("assets/images/slide",$avatar);
    //         unlink("assets/images/slide/".$lide->Url);
    //         $slide->Url = $avatar;
    //     }
    //     $slide->save();

    //   	return redirect('Admin/view_product')->with('thongbao','Cập nhật thành công');
    //     // return redirect('Admin/edit_p_category/'.$id)->with('thongbao','Cập nhật thành công');
    // }
    // public function delete_slide($id){
    //     Slide::find($id)->delete();
    //     return redirect('Admin/view_product')->with('thongbao','Xóa thành công');
    // }
}
