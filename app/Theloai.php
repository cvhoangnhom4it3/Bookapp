<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    protected $table = "the_loai";
    protected $primaryKey ='ID'; //chua khai cai nay tvquy it3
    public $timestamps = true;
    
    public function danhmuc(){
    	return $this->belongsTo('App\Danhmuc','ID_DM','ID'); //ddaauf tieen là App\model -> khóa phụ truyen_id của bảng chuongs -> khóa chính id của bảng truyens
    }
    public function product(){
    	// 1 danh mục có nhiều thể loại nên là: hasMany()
    	return $this->hasMany('App\Product','ID_TL','ID'); //ddaauf tieen là App\model -> khóa phụ truyen_id của bảng chuongs -> khóa chính id của bảng truyens
    }
}
