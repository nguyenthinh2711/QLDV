@extends('layouts.master')

@section('content')
<div class="container-fluid">
  <form action="{{ route('admin.listDvPhong') }}" method="get">
    @csrf
    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
      <div class="input-group">
        <input type="search" name="searchName" placeholder="Nhập từ bạn cần tìm?" aria-describedby="button-addon1" class="form-control border-0 bg-light" value="@if (isset($oldsearch)){{ $oldsearch }} @endif">
        <div class="input-group-append">
          <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
  </form>
  @if(!isset($dichvus[0]))
  <h5>Không tìm thấy kết quả!</h5>
  @endif
  @if(isset($dichvus[0]))
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
              <td><img style="width: 240px;"  src="{{ asset('storage/thumbnails/'.$dichvu->imgdv) }}" alt=""></td>
              <td style="text-align:justify;">
                <a href="{{ route('admin.editdichvu',['dichvu' =>$dichvu]) }}" class="btn btn-primary" style="margin-right: 10px">sửa</a></a>
              </td>
              <td style="text-align:justify;">
                <form action="{{ route('admin.destroydichvu',['dichvu' =>$dichvu]) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" type='submit' onclick="return confirm('Bạn chắc chắn muốn xóa?');">Xóa</button>
                </form>
              </td>
            </tr>           
          @endforeach
        </tbody>
      </table>
      @if (!isset($oldsearch))
      {{ $dichvus->links() }}        
    @endif

    @endif
</div>
@endsection
