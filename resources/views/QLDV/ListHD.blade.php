@extends('layouts.master')

@section('content')
<div class="container-fluid">

      <table class="table">
        <thead class="thead-light" style="width: 1420px;">
          <tr>
            <th scope="col" style="width:5%;">id</th>
            <th scope="col" style="width:15%;">Ngày tạo hóa đơn</th>
            <th scope="col" style="width:9%;">Phòng</th>
            <th scope="col" style="width:15%;">Nhân viên lập hóa đơn</th>
            <th scope="col" style="width:15%;">Tổng tiền hóa đơn</th>
            <th scope="col" style="width:20%;" colspan="2">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($hoadons as $hoadon)
            <tr>
              <th scope="row">{{ $hoadon->id }}</th>
              <td>{{ $hoadon->ngay }}</td>
              <td>{{ $hoadon->phong_id }}</td>
              <td>{{ $hoadon->nhanvien_id }}</td>
              <td>{{ $hoadon->tongtien }}</td>
              <td style="text-align:justify;">
                <a href="{{ route('admin.ctHoaDon',['hoadon' =>$hoadon]) }}" class="btn btn-primary" style="margin-right: 10px">Xem chi tiết</a></a>
              </td>
              <td style="text-align:justify;">
                <form action="" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" type='submit' onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xóa</button>
                </form>
              </td>
            </tr>           
          @endforeach
        </tbody>
      </table>
      {{ $hoadons->links() }}
</div>
@endsection
