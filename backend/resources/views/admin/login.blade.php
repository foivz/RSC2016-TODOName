@extends('layouts.app')

@section('content')
    <form role="form" method="POST" action="{{ url('/admin-panel') }}">
        {{ csrf_field() }}

        <div class="container">
        <div class="verticalcenter">
            <form  method="POST" class="form-horizontal" style="margin-bottom: 0px !important;">
                <div class="panel panel-primary col col-md-5">
                    <div class="panel-body">
                        <h4 class="text-center" style="margin-bottom: 25px;">Unesite svoje korisničke podatke</h4>
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Zaporka">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="pull-right"><label><input type="checkbox" style="margin-bottom: 20px" checked=""> Zapamti me</label></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
