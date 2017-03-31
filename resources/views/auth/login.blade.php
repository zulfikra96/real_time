@extends('app')
@section('body')
<style>
    .margin-top-80{
        margin-top:80px;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 margin-top-80">
            @if(Session::has('alert'))
                <div class="alert alert-danger">{{Session::get('alert')}} </div>
            @endif
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">LOGIN BACKOFFICE JAVA WALLPAPER</div>
                    <div class="panel-body">
                        <form action="{{url('login')}}" class="form-horizontal" method="POST">
                        {{csrf_field()}}         
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                            
                            <br>
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
