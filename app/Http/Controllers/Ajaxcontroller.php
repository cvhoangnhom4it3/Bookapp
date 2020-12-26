<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Theloai;

class Ajaxcontroller extends Controller
{
    public function get_theloai($iddanhmuc)
    {
    	$theloai = Theloai::where('ID_DM',$iddanhmuc)->get();
    	echo "<option disabled selected>Chọn thể loại</option>";
        foreach($theloai as $tl){
        	echo "<option value='".$tl->ID."'>".$tl->TenTL."</option>";
        }
            
    }
}
?>