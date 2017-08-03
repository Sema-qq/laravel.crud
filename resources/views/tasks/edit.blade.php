@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit tasks # - {{ $tasks->id }}</h3>
        @include('errors')
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['tasks.update' , $tasks->id], 'method'=>'PUT']) !!}
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{ $tasks->title }}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $tasks->description }}</textarea>
                    <br>
                    <button class="btn btn-warning">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection