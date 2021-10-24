@extends('layouts.master')

@section('content')
<div class="container-fluid">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col" style="width:10%;">Mã  nhân viên</th>
            <th scope="col" style="width:20%;">Tên NV</th>
            <th scope="col" style="width:15%;">Ngày sinh</th>
            <th scope="col" style="width:10%;">Giới tính</th>
            <th scope="col" style="width:25%;">số CMND</th>
            <th scope="col" style="width:15%;">Quê quán</th>
            <th scope="col" style="width:15%;">Số ATM</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($nvdichvus as $nvdichvu)
            <tr>
              {{-- {{dd($nvdichvu->MaNV)}} --}}
              <th scope="row">{{ strval($nvdichvu->MaNV) }}</th>
              <td>{{ $nvdichvu->Hoten }}</td>
              <td>{{ $nvdichvu->NgaySinh }}</td>
              <td>{{ $nvdichvu->Gioitinh }}</td>
              <td>{{ $nvdichvu->Socmnd }}</td>
              <td>{{ $nvdichvu->QueQuan }}</td>
              <td>{{ $nvdichvu->SoATM }}</td>
            </tr>           
          @endforeach
        </tbody>
      </table>
      {{ $nvdichvus->links() }}
</div>
@endsection
