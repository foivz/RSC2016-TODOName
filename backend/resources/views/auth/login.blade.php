@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                        {{ csrf_field() }}
                        <a href="redirect" class="btn btn-primary">
                            Facebook login
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
