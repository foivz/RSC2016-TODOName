@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                        {{ csrf_field() }}
                        <a href="redirectFacebook" class="btn btn-primary">
                            Facebook login
                        </a>
                    <a href="redirectGoogle" class="btn btn-primary">
                        Google login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
