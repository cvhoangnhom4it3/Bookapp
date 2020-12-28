@extends('Admin.index')

@section('content')

<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Sửa sản phẩm - <b>{{$products->Tensanpham}}</b></p>
        <div class="right__formWrapper">
            <form action="Admin/edit_product/{{$products->ID}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(count($errors) > 0)
                        <div class="alert">
                            @foreach($errors->all() as $err)
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Warning!</strong> &gt;&gt; {{$err}}.<br/>
                          @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert-success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <strong>Success!</strong> &gt;&gt; {{session('thongbao')}}. 
                        </div>
                    @endif
                    @if(session('loi'))
                        <div class="alert-success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            {{session('loi')}}
                        </div>
                    @endif
                    <div class="right__inputWrapper">
                        <label for="title">Tiêu đề</label>
                        <input type="text" placeholder="Tiêu đề" name="tensanpham" value="{{$products->Tensanpham}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Danh mục</label>
                        <select name="danhmuc" id="danhmuc">
                            <option disabled selected>Chọn danh mục</option>
                            @foreach($danhmuc as $dm)
                                <option @if($products->Theloai->Danhmuc->ID == $dm->ID)
                                    {{-- Từ $product ta lấy được thể loại và từ thể loại lấy ngược được ID danh mục (ID  của danh mục) rồi  --}}
                                    {{"selected"}}
                                @endif
                                value="{{$dm->ID}}">{{$dm->TenDM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="category">Thể loại</label>
                        <select name="theloai" id="theloai">
                            {{-- <option disabled selected>Chọn thể loại</option>
                            @foreach($theloai as $tl)
                                <option @if($products->Theloai->ID == $tl->ID)
                                            {{"selected"}}
                                        @endif
                                value="{{$tl->ID}}">{{$tl->TenTL}}</option>

                            @endforeach --}}
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh 1</label>
                        <input type="file" name="avatar">
                    </div>
                    <div class="right__inputImageReview"><img src="{{$products->Url}}" alt=""></div>
                    {{-- <div class="right__inputWrapper">
                        <label for="image">Hình ảnh 2</label>
                        <input type="file">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh 3</label>
                        <input type="file">
                    </div> --}}
                    <div class="right__inputWrapper">
                        <label for="title">Giá sản phẩm</label>
                        <input type="text" placeholder="Giá sản phẩm" name="giasanpham" value="{{$products->Giagoc}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">% Khuyến mãi</label>
                        <input type="text" placeholder="Nhập số phần trăm" name="phantramkm" value="{{ $products->Phantramkm}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Mã hàng</label>
                        <input type="text" placeholder="Từ khoá" name="mahang" value="{{ $products->Mahang}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="label">Nhãn sản phẩm</label>
                        <select name="nhansanpham">
                            <option disabled selected>Nhãn sản phẩm</option>
                            @if($products->New == 1)
                                <option value="1">New</option>
                            @else
                                <option value="0">Old</option>
                            @endif
                        </select>
                    </div>
                    
                    <div class="right__inputWrapper">
                        <label for="title">Nhà cung cấp</label>
                        <input type="text" placeholder="Từ khoá" name="nhacungcap" value="{{ $products->Nhacungcap}}"> 
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Nhà xuất bản</label>
                        <input type="text" placeholder="Từ khoá" name="nhaxuatban" value="{{ $products->Nhaxuatban}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Tác gỉa</label>
                        <input type="text" placeholder="Từ khoá" name="tacgia" value="{{ $products->Tacgia}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Hình thức bìa</label>
                        <input type="text" placeholder="Từ khoá" name="hinhthucbia" value="{{$products->Hinhthucbia }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Năm xuất bản</label>
                        <input type="text" placeholder="Từ khoá" name="namxuatban" value="{{ $products->Namxb}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Trọng lượng</label>
                        <input type="text" placeholder="Từ khoá" name="trongluong" value="{{ $products->Trongluong}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Kích thước bao bì</label>
                        <input type="text" placeholder="Từ khoá" name="ktbaobi" value="{{ $products->Kichthuocbaobi}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Số trang</label>
                        <input type="text" placeholder="Từ khoá" name="sotrang" value="{{ $products->Sotrang}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="10" placeholder="Mô tả">{{$products->Motasanpham }}</textarea>
                    </div>
                    <button class="btn" type="submit">Cập nhật</button>
                </form>
        </div>
    </div>
</div>

@endsection

@section('script')
    {{-- <script>
        $(document).ready(function() {
            $("#danhmuc").change(function(){
                var iddanhmuc = $(this).val();
                // alert(iddanhmuc);
                $.get("Admin/ajax/theloai/"+iddanhmuc,function(data){
                    $("#theloai").html(data);
                });
            });
            
        });
    </script> --}}
    <script>
        $(document).ready(function(){
            var iddanhmuc = $('#danhmuc').val();
            var pro_id = {{$products->ID}};
            $.get("Admin/ajax/ready_theloai/"+iddanhmuc+"/"+pro_id, function(data){
                $("#theloai").html(data);
            });
            // $("#danhmuc").change(function(){
            //     var iddanhmuc = $(this).val();
            //     $.get("Admin/ajax/theloai/"+iddanhmuc, function(data){
            //         $("#theloai").html(data);
            //     });
            // });
        });
    </script>
@endsection