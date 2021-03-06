@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc"> Chỉnh sửa slide</p>
            <div class="right__formWrapper">
                <form action="Admin/edit_slide/{{$slide->ID}}" method="post" enctype="multipart/form-data">
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
                        <label for="name">Tên slide</label>
                        <input type="text" placeholder="Tên slide" value="{{$slide->Tenslide}}" name="tensl">
                    </div>
                    {{-- <div class="right__inputWrapper">
                        <label for="url">Url</label>
                        <input type="text" placeholder="Url" value="Url">
                    </div> --}}
                    <div class="right__inputWrapper">
                        <label for="desc">Mô tả</label>
                        <textarea name="motasl" id="" cols="30" rows="10" placeholder="Mô tả">{{$slide->Mota}}</textarea>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="avatar" value="{{$slide->Url}}">
                    </div>
                    <div class="right__inputImageReview"><img src="{{$slide->Url}}" alt=""></div>
                    <button class="btn" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection