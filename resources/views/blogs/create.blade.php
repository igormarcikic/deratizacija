@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Kreiranje Novog Blog Posta</div>

                    <div class="card-body">
                        {!! Form::open(['method' => 'POST', 'action' => 'BlogController@store', 'files'=>true]) !!}
                        <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Body') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo_id', 'Fotografija:') !!}
                            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                        </div>
                        {!! Form::submit('Posalji Blog', ['class' => 'form-control btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
