@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Svi Blogovi <a href="blogs/create" class="btn btn-danger float-right">Kreiraj Novi Blog Post</a></div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td><a href="{{action('BlogController@show', [$blog->slug])}}"> {{$blog->title}}</a></td>
                                    <td>{{ Str::limit($blog->body,50)}}</td>
                                    <td><img src="/img/{{$blog ->photo ? $blog->photo->photo:''}}" width="100px"></td>
                                    <td><a href="{{action('BlogController@edit', [$blog->id])}}" class="btn btn-outline-secondary">Izmeni</a></td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action' =>['BlogController@destroy', $blog->id]]) !!}
                                        <div class="form-group">
                                            {!! Form::submit('Obrisi', ['class'=>'btn btn-danger']) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
