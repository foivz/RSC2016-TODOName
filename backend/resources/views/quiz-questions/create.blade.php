@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New QuizQuestion</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/quiz-questions', 'class' => 'form-horizontal', 'files' => true]) !!}
                            <div class="form-group {{ $errors->has('question') ? 'has-error' : ''}}">
                                {!! Form::label('question', 'question: ', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('question', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
                                {!! Form::label('category', 'category: ', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-8">
                                    {!! Form::text('category', null, ['class' => 'form-control']) !!}
                                    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        @include ('quiz-questions.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection