@extends('Admin.index')

@section('content')
	
	<div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Chèn sản phẩm</p>
            <div class="right__formWrapper">
                <form action="Admin/insert_product" method="post" enctype="multipart/form-data">
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
                        <input type="text" placeholder="Tiêu đề" name="tensanpham" value="{{ old('tensanpham') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Danh mục</label>
                        <select name="danhmuc" id="danhmuc">
                            <option disabled selected>Chọn danh mục</option>
                            @foreach($danhmuc as $dm)
                                <option value="{{$dm->ID}}">{{$dm->TenDM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="category">Thể loại</label>
                        <select name="theloai" id="theloai">
                            <option disabled selected>Chọn thể loại</option>
                            {{-- @foreach($theloai as $tl)
                                <option value="{{$tl->ID}}">{{$tl->TenTL}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh 1</label>
                        <input type="file" name="avatar">
                    </div>
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
                        <input type="text" placeholder="Giá sản phẩm" name="giasanpham" value="{{ old('giasanpham') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">% Khuyến mãi</label>
                        <input type="text" placeholder="Nhập số phần trăm" name="phantramkm" value="{{ old('phantramkm') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Mã hàng</label>
                        <input type="text" placeholder="Từ khoá" name="mahang" value="{{ old('mahang') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="label">Nhãn sản phẩm</label>
                        <select name="nhansanpham">
                            <option disabled selected>Nhãn sản phẩm</option>
                            <option value="1">New</option>
                            <option value="0">Old</option>
                        </select>
                    </div>
                    
                    <div class="right__inputWrapper">
                        <label for="title">Nhà cung cấp</label>
                        <input type="text" placeholder="Từ khoá" name="nhacungcap" value="{{ old('nhacungcap') }}"> 
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Nhà xuất bản</label>
                        <input type="text" placeholder="Từ khoá" name="nhaxuatban" value="{{ old('nhaxuatban') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Tác gỉa</label>
                        <input type="text" placeholder="Từ khoá" name="tacgia" value="{{ old('tacgia') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Hình thức bìa</label>
                        <input type="text" placeholder="Từ khoá" name="hinhthucbia" value="{{ old('hinhthucbia') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Năm xuất bản</label>
                        <input type="text" placeholder="Từ khoá" name="namxuatban" value="{{ old('namxuatban') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Trọng lượng</label>
                        <input type="text" placeholder="Từ khoá" name="trongluong" value="{{ old('trongluong') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Kích thước bao bì</label>
                        <input type="text" placeholder="Từ khoá" name="ktbaobi" value="{{ old('ktbaobi') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Số trang</label>
                        <input type="text" placeholder="Từ khoá" name="sotrang" value="{{ old('sotrang') }}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="10" placeholder="Mô tả">{{ old('mota') }}</textarea>
                    </div>
                    <button class="btn" type="submit">Chèn</button>
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
            $.get("Admin/ajax/theloai/"+iddanhmuc, function(data){
                $("#theloai").html(data);
            });
            $("#danhmuc").change(function(){
                var iddanhmuc = $(this).val();
                $.get("Admin/ajax/theloai/"+iddanhmuc, function(data){
                    $("#theloai").html(data);
                });
            });
        });
    </script>
@endsection