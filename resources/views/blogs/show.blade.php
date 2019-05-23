@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalji</div>

                    <div class="card-body">
                        <h2>{{$blog->title}}</h2>
                        <p>{{$blog->body}}</p>
                        <img src="/img/{{$blog ->photo ? $blog->photo->photo:''}}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
