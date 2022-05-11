@extends('layouts.app')

@section('content')
    <div class="col-md-6 offset-sm-6">
        <div class="text-center">
            <h1>Sign up</h1>
        </div>
    
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
    
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmation') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('rank_num','Rank') !!}
                        {!! Form::select('rank_num', ['7' => 'ブロンズ', '6' => 'シルバー','5' => 'ゴールド','4' => 'プラチナ','3' => 'ダイヤ','2' => 'マスター','1' => 'プレデター'], '5', ['class' => 'form-control']) !!}
                    </div>

    
                    {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

