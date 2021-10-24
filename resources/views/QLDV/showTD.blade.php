@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div>
        <div style="width: 50%; float: left;" >
            <h3 >Tên thực đơn: {{ $thucdon->tentd }}</h3>
        </div>
        <div style="float: right">
            <a href="{{ route('admin.editTD',['thucdon' =>$thucdon]) }}" class="btn btn-primary" style="margin-right: 10px">sửa</a></a>
        </div>
    </div>
        
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width:5%;">id</th>
            <th scope="col" style="width:15%;">Tên món</th>
            <th scope="col" style="width:20%;">Mô tả</th>
            <th scope="col" style="width:12%;">Loại món</th>
            <th scope="col" style="width:12%;">Giá</th>
            <th scope="col" >Ảnh minh họa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($monans as $monan)
            <tr>
              <th scope="row">{{ $monan->id }}</th>
              <td>{{ $monan->tenma }}</td>
              <td>{{ $monan->mota }}</td>
              <td>{{ $monan->loaimon }}</td>
              <td>{{ $monan->giama }}</td>
              <td><img style="width: 240px;" src="{{ asset('storage/thumbnails/'.$monan->imgma) }}" alt=""></td>
            </tr>           
          @endforeach
        </tbody>
      </table>
</div>
@endsection
