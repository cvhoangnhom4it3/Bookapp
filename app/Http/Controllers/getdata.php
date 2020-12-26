<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;
use App\Danhmuc;
class getdata extends Controller
{
    public function gettheloai(){
    	$theloai = Theloai::all();
    	//dd($truyen);
    	// print_r($theloai);
    	// exit;
    	return response()->json(['trangchu'=> $theloai,'mesage'=>200]);

    }
    public function text(){

    	$danhmuc = Danhmuc::all();
    	$cao = count($danhmuc);
    	//dd($truyen);
    	// print_r($theloai);
    	// exit;
    	return response()->json(['danhmuc'=> $danhmuc,'count'=>$cao]);

    }
}
