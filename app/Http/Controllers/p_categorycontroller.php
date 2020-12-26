<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use DB;

class p_categorycontroller extends Controller
{
    public function get_insert_p_category(Request $request){
        return view('PagesAdmin.insert_p_category');
    }
    public function post_insert_p_category(Request $request){
        $this->validate($request,
        [
            'tendm'=>'required'
        ],
        [
            'tendm.required'=>'Bạn chưa nhập tên truyện'
        ]);
        $danhmuc = new Danhmuc;
        $danhmuc->TenDM = $request->tendm;
        $danhmuc->MotaDM = $request->mota;
        $danhmuc->save();
        
      return redirect('Admin/insert_p_category')->with('thongbao','Thêm thành công');
    }
    public function view_p_category(){
       	
       	$danhmuc = Danhmuc::paginate(15);
       	// printf($danhmuc);
       	// exit();
        return view('PagesAdmin.view_p_category',compact('danhmuc'));

    }
    public function edit_p_category($id ,Request $request){
       	
       	$danhmuc = Danhmuc::find($id);
       	// printf($danhmuc);
       	// exit();
        return view('PagesAdmin.edit_p_category',compact('danhmuc'));

    }
    public function post_edit_p_category(Request $request,$id){
        $this->validate($request,
        [
            'TenDM'=>'required'
        ],
        [
            'TenDM.required'=>'Bạn chưa nhập tên truyện'
        ]);

        // $time = date("Y-m-d h:i:s");
        // DB::table('danh_muc')->where('ID', $id)->update(['TenDM' => $request->tendm,'MotaDM'=>$request->mota,'updated_at'=>$time]);

        //$danhmuc2 = Danhmuc::findOrFail($id);
        //$danhmuc2['TenDM'] = $request->input('tendm');
        //$danhmuc2['MotaDM'] = $request->input('mota');
        //$danhmuc2->save();
        

        //way 2
        //$input = ['moto']
        Danhmuc::where('ID', $id)->update($request->except('_token'));
        
      	return redirect('Admin/view_p_category')->with('thongbao','Cập nhật thành công');
        // return redirect('Admin/edit_p_category/'.$id)->with('thongbao','Cập nhật thành công');
    }
    public function delete_p_category($id){
        Danhmuc::find($id)->delete();
        return redirect('Admin/view_p_category')->with('thongbao','Xóa thành công');
    }
}
