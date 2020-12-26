<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    protected $table = "danh_muc";
    protected $primaryKey ='ID'; //chua khai cai nay tvquy it3
    /*
    * Massasignment
    */

    protected $fillable = ['TenDM','MotaDM'];//Cols name
    public $timestamps = true;

    public function theloai(){
    	// 1 danh mục có nhiều thể loại nên là: hasMany()
    	return $this->hasMany('App\Theloai','ID_DM','ID'); //ddaauf tieen là App\model -> khóa phụ truyen_id của bảng chuongs -> khóa chính id của bảng truyens
    }
}
