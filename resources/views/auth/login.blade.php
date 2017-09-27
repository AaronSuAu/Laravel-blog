@extends('main')

@section('title', '| Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3"></div>
        {!! Form::open() !!}
            {{Form::label('email','Email:')}}
            {{Form::email('email', null, ['class'=>'form-control'])}}
            {{Form::label('passowrd','Password:')}}
            {{Form::password('password', ['class'=>'form-control'])}}

            {{Form::checkbox('remember')}}{{Form::label('remember',"Remeber Me")}}

            {{Form::submit('Login', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>

@endsection