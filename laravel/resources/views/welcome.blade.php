@extends('layouts.master')

@section('title')
   Welcome!
@endsection

@section('content')
    <div class="row centered-form">

        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="...">
                    <h3 class="panel-title" style="..."> Sign in </h3>
                </div>
                <div class="panel-body">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username"> Username </label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="password"> Password </label>
                    <input class="form-control" type="text" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary"> Submit </button>
                <button type="reset" class="btn btn-primary"> Reset </button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection



