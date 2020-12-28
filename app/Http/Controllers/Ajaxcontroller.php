<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Theloai;
use App\Product;

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
    public function get_ready_theloai($iddanhmuc,$id_product)
    {
    	$products = Product::find($id_product);
    	$theloai = Theloai::where('ID_DM',$iddanhmuc)->get();
    	
    	echo "<option disabled selected>Chọn thể loại</option>";
        foreach($theloai as $tl){
        	// echo "<option".if($products->Theloai->ID == $tl->ID){echo ='".selected."'}." value='".$tl->ID."'>".$tl->TenTL."</option>";

        	echo '<option value="'.$tl->ID.'" '.(($products->Theloai->ID == $tl->ID)?'selected="selected"':"").'>'.$tl->TenTL.'</option>';
        }
            
    }
}
?>

