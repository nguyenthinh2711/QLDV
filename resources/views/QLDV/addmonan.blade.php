@extends('layouts.master')

@section('content')
<div class="tm-edit-product-row" >
  <div class="col-xl-6 col-lg-6 col-md-12" style="margin: 0 auto">
      <form action="{{ route('admin.addmonan') }}" method="POST">
          @csrf
          <div class="form-group">
          <label for="tenma">Tên món ăn</label>
          <input type="text" class="form-control" id="tenma" placeholder="Tên món ăn" name="tenma" value="{{ old('tenma') }}">     @error('tenma') {{ $message }}@enderror  
          </div>
          <div class="form-group">
          <label for="mota">Mô tả món ăn</label>
          <textarea class="form-control" name="mota" id="mota" cols="30" rows="10"></textarea> @error('mota') {{ $message }}@enderror
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col">
                      <label for="loaimon">Loại món</label>
                      <select class="form-control" id="loaimon"  name="loaimon">
                        <option value="1">Khai vị</option>
                        <option value="2">Món chính</option>
                        <option value="3">Tráng miệng</option>
                        <option value="4">Thức uống</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="giama">Giá</label>
                      <input type="text" class="form-control" id="giama" placeholder="giá món ăn" name="giama" value="{{ old('giama') }}">  @error('giama') {{ $message }}@enderror
                  </div>
              </div>
          </div>
          <div class="form-group">
              <img-loader></img-loader>
          </div>
          <div class="form-group" style="text-align: right">
              <input type="submit" class="btn btn-outline-primary" value="Thêm mới">
          </div>
      </form> 
  </div>
</div>

@endsection
