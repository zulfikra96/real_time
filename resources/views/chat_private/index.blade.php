@extends('app')
@section('body')
    <style>
        .right{
            text-align:right;
        }
    </style>
    <div class="container">
        <div class="row">
            {{-- Left Side --}}
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="">Chat</a>
                    </li>
                    <li class="list-group-item">
                        <span class="badge">14</span>
                        <a href="">Inbox</a>
                    </li>
                </ul>
            </div>
            {{-- Right Side --}}
            <div class="col-md-8">
                @yield('right')
            </div>
        </div>
    </div>
@endsection