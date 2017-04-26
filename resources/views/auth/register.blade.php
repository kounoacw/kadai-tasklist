@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>ユーザ登録</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('name', 'ユーザ名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', '確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection