@extends('Admin.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Xem admins</p>
            <div class="right__table">
                <div class="right__tableWrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Email</th>
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                <td data-label="STT">1</td>
                                <td data-label="Tên">dangthimydung</td>
                                <td data-label="Hình ảnh" style="text-align: center;"><img style="width: 50px;height: 50px; border-radius: 100%; object-fit: cover;" src="assets/assets/profile1.jpg" alt=""></td>
                                <td data-label="Email">dangthimydung@gmail.com</td>
                                <td data-label="Sửa" class="right__iconTable"><a href="Admin/edit_admin"><img src="assets/assets/icon-edit.svg" alt=""></a></td>
                                <td data-label="Xoá" class="right__iconTable"><a href=""><img src="assets/assets/icon-trash-black.svg" alt=""></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection