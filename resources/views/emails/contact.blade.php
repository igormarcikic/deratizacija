@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kontakt Forma</div>

                <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'MailController@send']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Ime i prezime') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('subject', 'Tema:') !!}
                        {!! Form::text('subject', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('mail_message', 'Poruka:') !!}
                        {!! Form::textarea('mail_message', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Posalji', ['class' => 'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection