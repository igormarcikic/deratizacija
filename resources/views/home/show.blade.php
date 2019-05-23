@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blog</div>

                    <div class="card-body">
                        <h2>{{$blog->title}}</h2>
                        <p>{!! $blog->body !!}</p>
                        <img src="/img/{{$blog ->photo ? $blog->photo->photo:''}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
