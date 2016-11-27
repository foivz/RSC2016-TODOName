@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin panel</div>
                    <div class="panel-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="quiz-questions">Question administration</a></td>
                                        <td>Opis</td>
                                    </tr>
                                    <tr>
                                        <td><a>Team administration</a></td>
                                        <td>Opis</td>

                                    </tr>
                                    <tr>
                                        <td><a>User administration</a></td>
                                        <td>Opis</td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $adminpanel->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection