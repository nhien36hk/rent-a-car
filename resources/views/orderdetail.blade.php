@extends('layouts.rentcar')
@section('title','My Posts')

@section('content')
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Đơn Đặt</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Trang Chủ</a></li>
        <li>Đơn Đặt</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->






 <div class="container">
    <table border="1" class="table datatable-pagination">
        <tr>
            <th> Sr # </th>
            <th> Car </th>
            <th> Img </th>
            <th> Number Phone </th>
            <th> Ghi Chú </th>
            <th> created_at </th>
            <th> Quản Lý </th>


        </tr>
        @forelse ($orders as $key=>$data)
        <tr>
    
            <td> {{$key+1}} </td>
            <td> {{$data->i}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->phone}}  </td>
            <td> {{$data->message}}  </td>
            <td> {{$data->created_at}}  </td>
          <td><a href="delete_order/{{$data->id}} " class="btn"  >Xóa<span class="angle_arrow"></span></a></td>
        </tr>
        @empty
            no data found
        @endforelse
    </table>
    </div>

    </div>
	</div>
@endsection