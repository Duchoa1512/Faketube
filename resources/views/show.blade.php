@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Channel</b></div>
            <div class="col col-md-6">
                <a href="{{ route('channels.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Name</b></label>
            <div class="col-sm-10">
                {{ $channel->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Description</b></label>
            <div class="col-sm-10">
                {{ $channel->description }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>subscribersCount</b></label>
            <div class="col-sm-10">
                {{ $channel->subscribersCount }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>url</b></label>
            <div class="col-sm-10">
                {{ $channel->url }}
            </div>
        </div>
    </div>
</div>

@endsection('content')

