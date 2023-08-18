@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-2"><b>Channels Management </b></div>
            
            <div class="col col-md-7">
                <form method="get" action="{{route('channels.search')}}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="txt_search">
                        <button class="btn btn-outline-secondary" type="submit">SEARCH</button>
                    </div>
                </form>
            </div>

            <div class="col col-md-3">
                <a href="{{ route('channels.create') }}" class="btn btn-success btn-sm float-end">
                    <i class="fas fa-plus"></i>  Add New Channel  <!-- Thêm biểu tượng '+' -->
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>SubscribersCount</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            @if(count($data) > 0)

            @foreach($data as $row)

            <tr>
                <td>{{ $row->Id }}</td>
                <td>{{ $row->Name }}</td>
                <td>{{ $row->Description }}</td>
                <td>{{ $row->SubscribersCount }}</td>
                <td>{{ $row->URL }}</td>
                <td>
                    <form method="post" action="{{ route('channels.destroy', $row->id) }}">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('channels.show', $row->id) }}" class="btn btn-primary btn-sm">
                            <i class="far fa-eye"></i> <!-- Thêm biểu tượng mắt -->
                        </a>
                        <a href="{{ route('channels.edit', $row->id) }}" class="btn btn-warning btn-sm">
                            <i class="far fa-edit"></i> <!-- Thêm biểu tượng bút chì -->
                        </a>
                        <button type="submit" class=" btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete?')">
                            <i class="fas fa-trash-alt"></i>
                        </button>


                    </form>

                </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection


