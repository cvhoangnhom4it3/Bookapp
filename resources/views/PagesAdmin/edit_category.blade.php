@extends('Admin.index')

@section('content')
	
	<div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Sửa thể loại</p>
            <div class="right__formWrapper">
                <form action="Admin/edit_category/{{$theloai->ID}}" method="post">
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
                        <label for="title">Tên thể loại</label>
                        <input type="text" placeholder="Tiêu đề" name="tentl" value="{{$theloai->TenTL}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="p_category">Danh mục</label>
                        <select name="danhmuc">
                            <option disabled selected>Chọn danh mục</option>
                            @foreach($danhmuc as $dm)
                                <option  @if($theloai->ID_DM == $dm->ID)
                                    {{"selected"}}
                                @endif
                                value="{{$dm->ID}}">{{$dm->TenDM}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="motatl" id="" cols="30" rows="10" placeholder="Mô tả">{{$theloai->MotaTL}}</textarea>
                    </div>
                    <button class="btn" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection