@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Chèn admin</p>
            <div class="right__formWrapper">
                <form action="" method="post">
                    <div class="right__inputWrapper">
                        <label for="name">Tên admin</label>
                        <input type="text" placeholder="Tên admin">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="password">Mật khẩu</label>
                        <input type="text" placeholder="Mật khẩu">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh</label>
                        <input type="file">
                    </div>
                    <button class="btn" type="submit">Chèn</button>
                </form>
            </div>
        </div>
    </div>
@endsection