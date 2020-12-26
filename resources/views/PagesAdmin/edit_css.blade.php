@extends('Admin.index')

@section('content')

    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Chỉnh sửa css</p>
            <div class="right__formWrapper">
                <form action="" method="post">
                    <div class="right__inputWrapper">
                        <label for="desc">Code</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="code"></textarea>
                    </div>
                    <button class="btn" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection