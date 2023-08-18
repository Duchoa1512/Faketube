@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Channel</div>
    <div class="card-body">
        <form method="post" action="{{ route('channels.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">SubscribersCount</label>
                <div class="col-sm-10">
                    <input type="text" name="subscriberscount" class="form-control" />
                </div>
            </div>
           
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">URL</label>
                <div class="col-sm-10">
                    <input type="text" name="url" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
<script>

</script>

@endsection('content')
