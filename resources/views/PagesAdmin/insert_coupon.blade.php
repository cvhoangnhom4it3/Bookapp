@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Chèn mã giảm giá</p>
            <div class="right__formWrapper">
                <form action="" method="post">
                    <div class="right__inputWrapper">
                        <label for="title">Tiêu đề</label>
                        <input type="text" placeholder="Tiêu đề">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="price">% Khuyến mãi</label>
                        <input type="text" placeholder="Giá SP">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="limit">Giới hạn</label>
                        <input type="number" placeholder="Giới hạn">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="product">Chọn sản phẩm</label>
                        <select name="">
                            <option disabled selected>Chọn danh mục</option>
                            <option value="">Kota dress</option>
                            <option value="">Huno dress</option>
                            <option value="">Beta dress</option>
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="code">Mã giảm giá</label>
                        <input type="text" placeholder="Mã giảm giá">
                    </div>
                    <button class="btn" type="submit">Chèn</button>
                </form>
            </div>
        </div>
    </div>
@endsection