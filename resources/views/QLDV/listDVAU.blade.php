@extends('layouts.master')

@section('content')
<div class="container-fluid">

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width:5%;">id</th>
            <th scope="col" style="width:15%;">Tên dịch vụ</th>
            <th scope="col" style="width:35%;">Chi tiết dịch vụ</th>
            <th scope="col" style="width:15%;">Loại dịch vụ</th>
            <th scope="col" style="width:12%;">Giá</th>
            <th scope="col" >Ảnh minh họa</th>
            <th scope="col" style="width:10%;" colspan="2">Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dichvus as $dichvu)
            <tr>
              <th scope="row">{{ $dichvu->id }}</th>
              <td>{{ $dichvu->tendv }}</td>
              <td>{{ $dichvu->chitiet }}</td>
              <td>{{ $dichvu->loaidv_id }}</td>
              <td>{{ $dichvu->giadv }}</td>
              <td>{{ $dichvu->imgdv }}</td>
              <td style="text-align:justify;">
                <a href="{{ route('admin.editdichvu',['dichvu' =>$dichvu]) }}" class="btn btn-primary" style="margin-right: 10px">sửa</a>
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
      {{ $dichvus->links() }}
</div>
@endsection
