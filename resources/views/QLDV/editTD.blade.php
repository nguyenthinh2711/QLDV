@extends('layouts.master')

@section('content')
<div class="tm-edit-product-row" >
  <div class="col-xl-6 col-lg-6 col-md-12" style="margin: 0 auto">
      <form action="{{ route('admin.updateTD',$thucdon->id) }}" method="POST">
          @csrf
          <div class="form-group">
          <label for="tentd">Tên thực đơn</label>
          <input type="text" class="form-control" id="tentd" placeholder="Tên thực đơn" name="tentd" value="{{ $thucdon->tentd }}">     @error('tenma') {{ $message }}@enderror  
          </div>
          <div class="form-group">
            <label for="ngaytd">Ngày thực đơn</label>
                      <select class="form-control" id="ngaytd"  name="ngaytd">
                        <option value="monday" @if($thucdon->ngaytd=='monday') {{ $select }} @endif>thứ 2</option>
                        <option value="tuesday"@if($thucdon->ngaytd=='tuesday') {{ $select }} @endif>thứ 3</option>
                        <option value="wednesday"@if($thucdon->ngaytd=='wednesday') {{ $select }} @endif>thứ 4</option>
                        <option value="thursday"@if($thucdon->ngaytd=='thursday') {{ $select }} @endif>thứ 5</option>
                        <option value="friday"@if($thucdon->ngaytd=='friday') {{ $select }} @endif>thứ 6</option>
                        <option value="saturday"@if($thucdon->ngaytd=='saturday') {{ $select }} @endif>thứ 7</option>
                        <option value="sunday"@if($thucdon->ngaytd=='sunday') {{ $select }} @endif>chủ nhật</option>
                      </select>
          </div>
          <div class="form-group">
              <h5>Chọn món ăn:</h5>
                @foreach ($monans as $monan)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $monan->id }}" name="monans[]" id="{{ $monan->id }}" @foreach ($monandachons as $monandachon)
                            @if($monan->id==$monandachon->id) {{ $checked }} @endif
                        @endforeach>
                        <label class="form-check-label" for="{{ $monan->id }}">{{ $monan->tenma }}</label>
                    </div>
                @endforeach
          </div>
          <div class="form-group" style="text-align: right">
              <input type="submit" class="btn btn-outline-primary" value="sửa thực đơn">
          </div>
      </form> 
  </div>
</div>

@endsection
