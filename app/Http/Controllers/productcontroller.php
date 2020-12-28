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
       	
    //    	$products = Product::with('theloai')->paginate(15);
     
    //     $TenTL = array();
        
    //     foreach ($products as $product) {
    //         array_push($TenTL, $product->theloai->TenTL);  
    //     }
     
    //     return view('PagesAdmin.view_product',compact('products'));

    // }
    public function view_product(){
        
        $products = Product::paginate(15);
     
        return view('PagesAdmin.view_product',compact('products'));

    }
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
    public function edit_product($id ,Request $request){
       	
       	$products = Product::find($id);
        $theloai = Theloai::all();
        $danhmuc = Danhmuc::all();
        // dd($products->Theloai->Danhmuc->ID);
        return view('PagesAdmin.edit_product',compact('products','theloai','danhmuc'));

    }
    public function post_edit_product(Request $request,$id){
        $this->validate($request,
        [
            'tensanpham'=>'required',
            'giasanpham'=>'required',
            
        ],
        [
            'tensl.required'=>'Bạn chưa nhập tên slide',
            'giasanpham.required'=>'Bạn chưa nhập giá sản phẩm',
            
        ]);
        $products = Product::find($id);
        $products->Mahang = $request->mahang;
        $products->Tensanpham = $request->tensanpham;
        $products->Nhacungcap = $request->nhacungcap;
        $products->Nhaxuatban = $request->nhaxuatban;
        $products->Tacgia = $request->tacgia;
        $products->Hinhthucbia = $request->hinhthucbia;
        $products->Namxb = $request->namxuatban;
        $products->Trongluong = $request->trongluong;
        $products->Kichthuocbaobi = $request->ktbaobi;
        $products->Sotrang = $request->sotrang;
        $products->Motasanpham = $request->mota;
        $products->Giagoc = $request->giasanpham;
        $products->Phantramkm = $request->phantramkm;

        if(isset($request->nhansanpham)){
            $products->New = $request->nhansanpham;
        }
        else{
            $products->New = 0;
        }
        
        $products->Tenkhongdau = $this->changeTitle($request->tensanpham);
        if (isset($request->phantramkm)) {
            $products->Giakm = ($request->giasanpham - ($request->giasanpham*($request->phantramkm / 100)));
        }
        else{
            $products->Giakm = 0;
        }
        
        $products->ID_TL = $request->theloai;

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
            if($products->Url){
               unlink($products->Url); 
            }
            $products->Url = "assets/images/product/".$avatar;
        }
        $products->save();

      	return redirect('Admin/view_product')->with('thongbao','Cập nhật thành công');
        // return redirect('Admin/edit_p_category/'.$id)->with('thongbao','Cập nhật thành công');
    }
    public function delete_slide($id){
        Product::find($id)->delete();
        return redirect('Admin/view_product')->with('thongbao','Xóa thành công');
    }
}
