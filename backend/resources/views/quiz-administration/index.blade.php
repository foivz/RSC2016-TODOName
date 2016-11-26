@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Quizadministration</div>
                    <div class="panel-body">

                        <a href="{{ url('/quiz-administration/create') }}" class="btn btn-primary btn-xs" title="Add New QuizAdministration"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($quizadministration as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/quiz-administration/' . $item->id) }}" class="btn btn-success btn-xs" title="View QuizAdministration"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/quiz-administration/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit QuizAdministration"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/quiz-administration', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete QuizAdministration" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete QuizAdministration',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $quizadministration->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection