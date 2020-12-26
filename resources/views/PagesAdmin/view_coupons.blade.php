@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem sản phẩm</p>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá SP</th>
                                <th>Mã giảm giá</th>
                                <th>Giới hạn</th>
                                <th>Đã dùng</th>
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td data-label="STT">1</td>
                                <td data-label="Tiêu đề">Mã giảm giá cho vona Dress</td>
                                <td data-label="Tên sản phẩm">Vona Dress</td>
                                <td data-label="Giá SP">500.000 ₫</td>
                                <td data-label="Mã giảm giá">abc</td>
                                <td data-label="Giới hạn">4</td>
                                <td data-label="Đã dùng">2</td>
                                <td data-label="Sửa" class="right__iconTable"><a href="Admin/edit_coupon"><img src="assets/assets/icon-edit.svg" alt=""></a></td>
                                <td data-label="Xoá" class="right__iconTable"><a href="Admin/edit_coupon"><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                            </tr>
                            <tr>
                                <td data-label="STT">2</td>
                                <td data-label="Tiêu đề">Mã giảm giá cho huno dress</td>
                                <td data-label="Tên sản phẩm">Huno Dress</td>
                                <td data-label="Giá SP">500.000 ₫</td>
                                <td data-label="Mã giảm giá">lalla</td>
                                <td data-label="Giới hạn">5</td>
                                <td data-label="Đã dùng">2</td>
                                <td data-label="Sửa" class="right__iconTable"><a href="Admin/edit_coupon"><img src="assets/assets/icon-edit.svg" alt=""></a></td>
                                <td data-label="Xoá" class="right__iconTable"><a href="Admin/edit_coupon"><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection