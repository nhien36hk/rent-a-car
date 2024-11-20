@extends('layouts.admin')

@section('content')
<h2 class="page-title">USER DETAILS</h2>	


 <div class="container">
    <table border="1" class="table datatable-pagination">
        <tr>
            <th> Sr # </th>
            <th> Username </th>
            <th> Email </th>
            <th> Number </th>
            <th> City </th>
            <th> created_at </th>
            <th> updated_at </th>

        </tr>
        @forelse ($User as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->number}}  </td>
            <td> {{$data->city}}  </td>
            <td> {{$data->created_at}}  </td>
            <td> {{$data->updated_at}}  </td>

        </tr>
        @empty
            no data found
        @endforelse
    </table>
    </div>

    </div>
	</div>

    @endsection

