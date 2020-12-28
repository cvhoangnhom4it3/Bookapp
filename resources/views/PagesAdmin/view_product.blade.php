@extends('Admin.index')

@section('content')

	<div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem sản phẩm</p>
            <div class="right__table">
                <div class="right__tableWrapper">
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
                    @php
                        {{$count = 0;}}
                    @endphp
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Thể loại</th>
                                <th>Danh mục</th>
                                <th>Hình ảnh</th>
                                <th>Giá SP</th>
                                <th>Giá khuyến mãi</th>
                                <th>Đã bán</th>
                                <th>Mã hàng</th>
                                <th>Thời gian</th>
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($products as $pd)
                                <tr>
                                    <td data-label="STT">{{$pd->ID }}</td>
                                    <td data-label="Tên sản phẩm">{{$pd->Tensanpham}}</td>
                                    <td data-label="Thể loại">{{$pd->Theloai->TenTL}}</td>
                                    <td data-label="Danh mục">{{$pd->Theloai->Danhmuc->TenDM}}</td>
                                    <td data-label="Hình ảnh"><img src="{{$pd->Url}}" alt=""></td>
                                    <td data-label="Giá SP">{{$pd->Giagoc}} ₫</td>
                                    <td data-label="Giá khuyến mãi">{{$pd->Giakm}} ₫</td>
                                    <td data-label="Đã bán">{{$pd->Daban}}</td>
                                    <td data-label="Mã hàng">{{$pd->Mahang}}</td>
                                    <td data-label="Thời gian">{{$pd->created_at}}-{{$pd->updated_at}}</td> 
                                    <td data-label="Sửa" class="right__iconTable"><a href="Admin/edit_product/{{$pd->ID}}"><img src="assets/assets/icon-edit.svg" alt=""></a></td>
                                    <td data-label="Xoá" class="right__iconTable"><a href="Admin/delete_product/{{$pd->ID}}"><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links()}} 
                </div>
            </div>
        </div>
    </div>
@endsection