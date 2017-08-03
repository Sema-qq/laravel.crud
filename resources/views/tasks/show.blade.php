@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $tasks->title }}</h3>
                <p>
                    {{ $tasks->description }}
                </p>
            </div>
        </div>
    </div>
@endsection