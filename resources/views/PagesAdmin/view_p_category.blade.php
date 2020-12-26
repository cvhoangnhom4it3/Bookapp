@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem danh mục</p>
            <div class="right__table">
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
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @php
                                {{$count = 0;}}
                            @endphp
                            
                            @foreach($danhmuc as $dm)
                            <tr>
                                <td data-label="STT">{{$count += 1}}</td>
                                <td data-label="Tiêu đề">{{$dm->TenDM}}</td>
                                <td data-label="Mô tả">{{$dm->MotaDM}}</td>
                                <td data-label="Sửa" class="right__iconTable"><a href="Admin/edit_p_category/{{$dm->ID}}"><img src="assets/assets/icon-edit.svg" alt=""></a></td>
                                <td data-label="Xoá" class="right__iconTable"><a href="Admin/delete_p_category/{{$dm->ID}}"><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $danhmuc->links()}} 
                </div>
            </div>
        </div>
    </div>
@endsection