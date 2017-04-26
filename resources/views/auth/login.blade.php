@extends('layouts.app')

@section('content')

    <div clas="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'login.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            
            {!! Form::close() !!}
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p>ユーザ登録がまだの方は{!! link_to_route('signup.get', 'こちら') !!}</p>
        </div>
    </div>

@endsection