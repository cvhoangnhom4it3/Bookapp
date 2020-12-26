@extends('Admin.index')

@section('content')

<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Sửa sản phẩm</p>
        <div class="right__formWrapper">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="right__inputWrapper">
                    <label for="title">Tên sản phẩm</label>
                    <input type="text" placeholder="Tên sản phẩm">
                </div>
                <div class="right__inputWrapper">
                    <label for="p_category">Danh mục</label>
                    <select name="">
                        <option disabled selected>Chọn danh mục</option>
                        <option value="">Dress</option>
                        <option value="">Top + Skert</option>
                    </select>
                </div>
                <div class="right__inputWrapper">
                    <label for="category">Thể loại</label>
                    <select name="">
                        <option disabled selected>Chọn thể loại</option>
                        <option value="">Nữ</option>
                        <option value="">Nam</option>
                    </select>
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Hình ảnh 1</label>
                    <input type="file">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Hình ảnh 2</label>
                    <input type="file">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Hình ảnh 3</label>
                    <input type="file">
                </div>
                <div class="right__inputWrapper">
                    <label for="label">Nhãn sản phẩm</label>
                    <select name="">
                        <option disabled selected>Nhãn sản phẩm</option>
                        <option value="new">Mới</option>
                        <option value="sale">Giảm giá</option>
                    </select>
                </div>
                <div class="right__inputWrapper">
                    <label for="title">Giá sản phẩm</label>
                    <input type="text" placeholder="Giá sản phẩm">
                </div>
                <div class="right__inputWrapper">
                    <label for="title">% Khuyến mãi</label>
                    <input type="text" placeholder="Nhập số phần trăm">
                </div>
                {{-- <div class="right__inputWrapper">
                    <label for="title">Từ khoá</label>
                    <input type="text" placeholder="Từ khoá">
                </div> --}}
                <div class="right__inputWrapper">
                    <label for="desc">Mô tả</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                </div>
                <button class="btn" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

@endsection