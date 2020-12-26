<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Theloai;

class categorycontroller extends Controller
{
    public function view_category(){
       	
       	$theloai = Theloai::paginate(15);
       	// printf($danhmuc);
       	// exit();
        return view('PagesAdmin.view_category',compact('theloai'));

    }
    public function get_insert_category(Request $request){

    	$danhmuc = Danhmuc::all();
        return view('PagesAdmin.insert_category',compact('danhmuc'));
    }
    public function post_insert_category(Request $request){
        $this->validate($request,
        [
            'tentl'=>'required',
            'danhmuc'=>'required'
        ],
        [
            'tentl.required'=>'Bạn chưa nhập tên thể loại',
            'danhmuc.required'=>'Bạn chưa chọn danh mục'
        ]);
        $theloai = new Theloai;
        $theloai->TenTL = $request->tentl;
        $theloai->MotaTL = $request->motatl;
        $theloai->ID_DM = $request->danhmuc;
        $theloai->save();
        
      return redirect('Admin/insert_category')->with('thongbao','Thêm thành công');
    }
    public function edit_category($id ,Request $request){
       	
       	$theloai = Theloai::find($id);
       	// printf($danhmuc);
       	// exit();
       	$danhmuc = Danhmuc::all();
        return view('PagesAdmin.edit_category',compact('theloai','danhmuc'));

    }
    public function post_edit_category(Request $request,$id){
        $this->validate($request,
        [
            'tentl'=>'required',
            'danhmuc'=>'required'
        ],
        [
            'tentl.required'=>'Bạn chưa nhập tên thể loại',
            'danhmuc.required'=>'Bạn chưa chọn danh mục'
        ]);

        // $time = date("Y-m-d h:i:s");
        // DB::table('danh_muc')->where('ID', $id)->update(['TenDM' => $request->tendm,'MotaDM'=>$request->mota,'updated_at'=>$time]);

        //$danhmuc2 = Danhmuc::findOrFail($id);
        //$danhmuc2['TenDM'] = $request->input('tendm');
        //$danhmuc2['MotaDM'] = $request->input('mota');
        //$danhmuc2->save();
        

        //way 2
        //$input = ['moto']
        // Theloai::where('ID', $id)->update($request->except('_token'));
        $theloai = Theloai::find($id);
        $theloai->TenTL = $request->tentl;
        $theloai->MotaTL = $request->motatl;
        $theloai->ID_DM = $request->danhmuc;
        $theloai->save();

      	return redirect('Admin/view_category')->with('thongbao','Cập nhật thành công');
        // return redirect('Admin/edit_p_category/'.$id)->with('thongbao','Cập nhật thành công');
    }
    public function delete_category($id){
        Theloai::find($id)->delete();
        return redirect('Admin/view_category')->with('thongbao','Xóa thành công');
    }
}
