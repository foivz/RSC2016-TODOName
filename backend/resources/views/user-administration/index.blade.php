@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Useradministration</div>
                    <div class="panel-body">

                        <a href="{{ url('/user-administration/create') }}" class="btn btn-primary btn-xs" title="Add New UserAdministration"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Nickname</th><th>email</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($useradministration as $item)
                                    <tr>
                                        <td>{{ $item->nickname }}</td>
                                        <td>{{ $item->email }}</td>

                                        <td>
                                            <a href="{{ url('/user-administration/' . $item->id) }}" class="btn btn-success btn-xs" title="View UserAdministration"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/user-administration/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit UserAdministration"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/user-administration', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete UserAdministration" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete UserAdministration',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $useradministration->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection