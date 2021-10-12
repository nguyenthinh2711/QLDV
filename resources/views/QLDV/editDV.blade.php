@extends('layouts.master')

@section('content')
<div class="tm-edit-product-row" >
  <div class="col-xl-6 col-lg-6 col-md-12" style="margin: 0 auto">
      <form action="{{ route('admin.updatedichvu',$dichvu->id) }}" method="POST">
          @csrf
          <div class="form-group">
          <label for="tendv">Tên dịch vụ</label>
          <input type="text" class="form-control" id="tendv" placeholder="Tên dịch vụ" name="tendv" value="{{ $dichvu->tendv }}">     @error('tendv') {{ $message }}@enderror  
          </div>
          <div class="form-group">
          <label for="chitiet">Chi tiết dịch vụ</label>
          <textarea class="form-control" name="chitiet" id="chitiet" cols="30" rows="10">{{ $dichvu->chitiet }}</textarea> @error('chitiet') {{ $message }}@enderror
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="col">
                      <label for="loaidv_id">Loại dịch vụ</label>
                      <select class="form-control" id="loaidv_id"  name="loaidv_id">
                        <option value="1" @if($dichvu->loaidv_id==1) {{ $select }} @endif>Dịch vụ phòng</option>
                        <option value="2" @if($dichvu->loaidv_id==2) {{ $select }} @endif>Dịch vụ ăn uống</option>
                        <option value="3" @if($dichvu->loaidv_id==3) {{ $select }} @endif>Dịch vụ sức khỏe</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="giadv">Giá dịch vụ</label>
                      <input type="text" class="form-control" id="giadv" placeholder="giá món ăn" name="giadv" value="{{ $dichvu->giadv }}">  @error('giadv') {{ $message }}@enderror
                  </div>
              </div>
          </div>
          <div class="form-group">
            <h4>ảnh cũ</h4>
            <td><img style="width: 240px;" src="{{ asset('storage/thumbnails/'.$dichvu->imgdv) }}" alt=""></td>
            </div>
          <div class="form-group">
              <img-loader></img-loader>
          </div>
          <div class="form-group" style="text-align: right">
              <input type="submit" class="btn btn-outline-primary" value="Sửa">
          </div>
      </form> 
  </div>
</div>

@endsection
