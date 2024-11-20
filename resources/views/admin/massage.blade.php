@extends('layouts.admin')

@section('content')
<h2 class="page-title">MESSAGES</h2>	


 <div class="container">
    <table border="1" class="table datatable-pagination">
        <tr>
            <th> Sr # </th>
            <th> Username </th>
            <th> Email </th>
            <th> Number Phone </th>
            <th> Message </th>
            <th> created_at </th>

        </tr>
        @forelse ($contacts as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->fullname}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->phone}}  </td>
            <td> {{$data->message}}  </td>
            <td> {{$data->created_at}}  </td>
    

        </tr>
        @empty
            no data found
        @endforelse
    </table>
    </div>

    </div>
	</div>

    @endsection

