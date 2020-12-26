<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "san_pham";
    protected $primaryKey ='ID'; //chua khai cai nay tvquy it3
    public $timestamps = true;

    public function theloai(){
    	return $this->belongsTo('App\Theloai','ID_TL','ID'); //ddaauf tieen là App\model -> khóa phụ truyen_id của bảng chuongs -> khóa chính id của bảng truyens
    }
}
