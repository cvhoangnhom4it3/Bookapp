@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem slides</p>
            <div class="right__slidesWrapper">
                <div class="right__slides">
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
                    
                    @foreach($slide as $sl)
                        <div class="right__slide">
                            <div class="right__slideTitle">{{$sl->Tenslide}}</div>
                            <div class="right__slideImage"><img src="assets/images/slide/{{$sl->Url}}" alt=""></div>
                            <div class="right__slideIcons">
                                <a class="right__slideIcon" href="Admin/edit_slide/{{$sl->ID}}"><img src="assets/assets/icon-pencil.svg" alt=""></a>
                                <a class="right__slideIcon" href="Admin/delete_slide/{{$sl->ID}}"><img src="assets/assets/icon-trash.svg" alt=""></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection