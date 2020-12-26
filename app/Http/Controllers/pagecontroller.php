<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index(){
       
        return view('PagesAdmin.dashboard');

    }
    public function edit_admin(){
       
        return view('PagesAdmin.edit_admin');

    }
    public function edit_category(){
       
        return view('PagesAdmin.edit_category');

    }
    public function edit_coupon(){
       
        return view('PagesAdmin.edit_coupon');

    }
    public function edit_css(){
       
        return view('PagesAdmin.edit_css');

    }
    public function edit_p_category(){
       
        return view('PagesAdmin.edit_p_category');

    }
    public function edit_product(){
       
        return view('PagesAdmin.edit_product');

    }
    public function edit_slide(){
       
        return view('PagesAdmin.edit_slide');

    }
    public function insert_admin(){
       
        return view('PagesAdmin.insert_admin');

    }
    public function insert_category(){
       
        return view('PagesAdmin.insert_category');

    }
    public function insert_coupon(){
       
        return view('PagesAdmin.insert_coupon');

    }
    public function insert_p_category(){
       
        return view('PagesAdmin.insert_p_category');

    }
    public function insert_product(){
       
        return view('PagesAdmin.insert_product');

    }
    public function insert_slide(){
       
        return view('PagesAdmin.insert_slide');

    }
    public function view_admins(){
       
        return view('PagesAdmin.view_admins');

    }
    public function view_category(){
       
        return view('PagesAdmin.view_category');

    }
    public function view_coupons(){
       
        return view('PagesAdmin.view_coupons');

    }
    public function view_customers(){
       
        return view('PagesAdmin.view_customers');

    }
    public function view_orders(){
       
        return view('PagesAdmin.view_orders');

    }
    
    public function view_product(){
       
        return view('PagesAdmin.view_product');

    }
    public function view_slides(){
       
        return view('PagesAdmin.view_slides');

    }
}
