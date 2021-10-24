@extends('layouts.master')

@section('content')
<div class="tm-edit-product-row" >
  <div class="col-xl-6 col-lg-6 col-md-12" style="margin: 0 auto">
      <form action="{{ route('admin.storeTD') }}" method="POST">
          @csrf
          <div class="form-group">
          <label for="tentd">Tên thực đơn</label>
          <input type="text" class="form-control" id="tentd" placeholder="Tên thực đơn" name="tentd" value="{{ old('tentd') }}">     @error('tenma') {{ $message }}@enderror  
          </div>
          <div class="form-group">
            <label for="ngaytd">Ngày thực đơn</label>
                      <select class="form-control" id="ngaytd"  name="ngaytd">
                        <option value="monday">thứ 2</option>
                        <option value="tuesday">thứ 3</option>
                        <option value="wednesday">thứ 4</option>
                        <option value="thursday">thứ 5</option>
                        <option value="friday">thứ 6</option>
                        <option value="saturday">thứ 7</option>
                        <option value="sunday">chủ nhật</option>
                      </select>
          </div>
          <div class="form-group">
              <h5>Chọn món ăn:</h5>
                @foreach ($monans as $monan)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $monan->id }}" name="monans[]" id="{{ $monan->id }}">
                        <label class="form-check-label" for="{{ $monan->id }}">{{ $monan->tenma }}</label>
                    </div>
    
                @endforeach

          </div>
          <div class="form-group" style="text-align: right">
              <input type="submit" class="btn btn-outline-primary" value="Thêm mới">
          </div>
      </form> 
  </div>
</div>

@endsection
