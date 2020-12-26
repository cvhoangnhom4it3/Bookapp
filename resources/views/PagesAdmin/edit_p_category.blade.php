@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Sửa danh mục</p>
            <div class="right__formWrapper">
                <form action="Admin/edit_p_category/{{ $danhmuc->ID }}" method="post" enctype="multipart/form-data">
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
                        <label for="title">Tên danh mục</label>
                        <input type="text" value="{{$danhmuc->TenDM}}" name="TenDM">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="MotaDM" id="" cols="30" rows="10" placeholder="">{{$danhmuc->MotaDM}}</textarea>
                    </div>
                    <button class="btn" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection