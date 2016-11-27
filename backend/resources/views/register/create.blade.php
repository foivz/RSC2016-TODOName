@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Team name & quiz category</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/register', 'class' => 'form-horizontal', 'files' => true]) !!}

                            <div class="form-group {{ $errors->has('teamName') ? 'has-error' : ''}}">
                                {!! Form::label('teamName', 'Ime tima: ', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('teamName', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('teamName', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div
                            <div class="form-group {{ $errors->has('quizCategory') ? 'has-error' : ''}}">
                                {!! Form::label('quizCategory', 'Quiz category: ', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('quizCategory', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('quizCategory', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div
                            @include ('register.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection