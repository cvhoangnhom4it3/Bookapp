@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem đơn hàng</p>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Email</th>
                                <th>Số hoá đơn</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Kích cở</th>
                                <th>Ngày</th>
                                <th>Tổng</th>
                                <th>Trạng thái</th>
                                <th>Xoá</th>
                                <th>Thanh toán</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td data-label="STT">1</td>
                                <td data-label="Email">chibaosinger@gmail.com</td>
                                <td data-label="Số hoá đơn">337203544</td>
                                <td data-label="Tên sản phẩm">Bata Dress</td>
                                <td data-label="Số lượng">2</td>
                                <td data-label="Kích cở">Nhỏ</td>
                                <td data-label="Ngày">2020-07-13</td>
                                <td data-label="Tổng">1.180.000 ₫</td>
                                <td data-label="Trạng thái">Đang Chờ Xử Lý</td>
                                <td data-label="Xoá" class="right__iconTable"><a href=""><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                                <td data-label="Thanh toán" class="right__confirm">
                                    <a href="" class="right__iconTable"><img src="assets/assets/icon-check.svg" alt=""></a>
                                    <a href="" class="right__iconTable"><img src="assets/assets/icon-x.svg" alt=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td data-label="STT">1</td>
                                <td data-label="Email">dangthimydung@gmail.com</td>
                                <td data-label="Số hoá đơn">238991444</td>
                                <td data-label="Tên sản phẩm">Dada Dress</td>
                                <td data-label="Số lượng">2</td>
                                <td data-label="Kích cở">Nhỏ</td>
                                <td data-label="Ngày">2020-07-13</td>
                                <td data-label="Tổng">590.000 ₫</td>
                                <td data-label="Trạng thái">Đang Chờ Xử Lý</td>
                                <td data-label="Xoá" class="right__iconTable"><a href=""><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                                <td data-label="Thanh toán">
                                    <a href="" class="right__iconTable iconConfirm"><img src="assets/assets/icon-check.svg" alt=""></a>
                                    <a href="" class="right__iconTable iconConfirm"><img src="assets/assets/icon-x.svg" alt=""></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection