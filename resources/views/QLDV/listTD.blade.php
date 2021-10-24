@extends('layouts.master')

@section('content')
<div class="container-fluid">

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width:5%;">id</th>
            <th scope="col" style="width:15%;">Tên thục đơn</th>
            <th scope="col" style="width:20%;">Ngày sử dụng</th>
            <th scope="col" style="width:12%;">thời gian tạo</th>
            <th scope="col" style="width:15%;" colspan="2">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($thucdons as $thucdon)
            <tr>
              <th scope="row">{{ $thucdon->id }}</th>
              <td>{{ $thucdon->tentd }}</td>
              <td>{{ $thucdon->ngaytd }}</td>
              <td>{{ $thucdon->created_at }}</td>
              <td style="text-align:justify;">
                <a href="{{ route('admin.showTD',['thucdon' =>$thucdon]) }}" class="btn btn-primary" style="margin-right: 10px">xem chi tiết</a></a>
              </td>
              <td style="text-align:justify;">
                <a href="{{ route('admin.editTD',['thucdon' =>$thucdon]) }}" class="btn btn-primary" style="margin-right: 10px">sửa</a></a>
              </td>
            </tr>           
          @endforeach
        </tbody>
      </table>
      {{ $thucdons->links() }}
</div>
@endsection
