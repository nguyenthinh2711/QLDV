@extends('layouts.master')

@section('content')
<div class="tm-edit-product-row" >
  <div class="col-xl-6 col-lg-6 col-md-12" style="margin: 0 auto">
      <form action="{{ route('admin.updatemonan',$monan->id) }}" method="POST">
          @csrf
          <div class="form-group">
          <label for="tenma">Tên món ăn</label>
          <input type="text" class="form-control" id="tenma" placeholder="Tên món ăn" name="tenma" value="{{ $monan->tenma }}">     @error('tenma') {{ $message }}@enderror  
          </div>
          <div class="form-group">
          <label for="mota">Mô tả món ăn</label>
          <textarea class="form-control" name="mota" id="mota" cols="30" rows="10" value="">{{ $monan->mota }}</textarea> @error('mota') {{ $message }}@enderror
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col">
                      <label for="loaimon">Loại món</label>
                      <select class="form-control" id="loaimon"  name="loaimon" value>
                        <option value="1" @if($monan->loaimon==1) {{ $select }} @endif>Khai vị</option>
                        <option value="2" @if($monan->loaimon==2) {{ $select }} @endif>Món chính</option>
                        <option value="3" @if($monan->loaimon==3) {{ $select }} @endif>Tráng miệng</option>
                        <option value="4" @if($monan->loaimon==4) {{ $select }} @endif>Thức uống</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="giama">Giá</label>
                      <input type="text" class="form-control" id="giama" placeholder="giá món ăn" name="giama" value="{{ $monan->giama }}">  @error('giama') {{ $message }}@enderror
                  </div>
              </div>
          </div>
          <div class="form-group">
            <h4>ảnh cũ</h4>
            <td><img style="width: 240px;" src="{{ asset('storage/thumbnails/'.$monan->imgma) }}" alt=""></td>
        </div>
          <div class="form-group">
              <img-loader></img-loader>
          </div>
          <div class="form-group" style="text-align: right">
              <input type="submit" class="btn btn-outline-primary" value="Sửa đổi">
          </div>
      </form> 
  </div>
</div>

@endsection
