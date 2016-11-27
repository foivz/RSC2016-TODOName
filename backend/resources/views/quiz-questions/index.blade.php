@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Quizquestions</div>
                    <div class="panel-body">

                        <a href="{{ url('/quiz-questions/create') }}" class="btn btn-primary btn-xs" title="Add New QuizQuestion"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Questions</th><th>Category</th><th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($quizquestions as $item)
                                    <tr>
                                        <td>{{ $item->question }}</td>
                                        <td>{{ $item->category }}</td>

                                        <td>
                                            <a href="{{ url('/quiz-questions/' . $item->id) }}" class="btn btn-success btn-xs" title="View QuizQuestion"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/quiz-questions/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit QuizQuestion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/quiz-questions', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete QuizQuestion" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete QuizQuestion',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $quizquestions->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection